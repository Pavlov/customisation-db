<?php
/**
 *
 * @package titania
 * @version $Id: mods_main.php 215 2009-06-13 20:40:08Z exreaction $
 * @copyright (c) 2008 phpBB Customisation Database Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* mods_main
* MODs Categories
* @package mods
*/
class contribs_main extends titania_object
{
	public $p_master;
	public $u_action;

	/**
	 * Constructor
	 */
	public function __construct($p_master)
	{
		global $user;

		$this->p_master = $p_master;

		$this->page = $user->page['script_path'] . $user->page['page_name'];
	}

	/**
	 * main method for this module
	 *
	 * @param string $id
	 * @param string $mode
	 */
	public function main($id, $mode)
	{
		global $user, $template, $cache;

		titania::add_lang(array('contrib', 'contrib_mod'));

		$category	= request_var('category', 0);
		$submit		= isset($_POST['submit']) ? true : false;

		$form_key	= 'mods_main';
		add_form_key($form_key);

		switch ($mode)
		{
			case 'details':
				$this->tpl_name = 'mods/mod_details';
				$this->page_title = 'MODS_DETAILS';

				$found = $this->mod_details($category, $mod_id);

				if (!$found)
				{
					titania::error_box('ERROR', $user->lang['MOD_NOT_FOUND'], TITANIA_ERROR);

					$mode = ($category) ? 'list' : 'categories';
					$this->main($id, $mode);
					return;
				}
			break;

			case 'list':
			case 'search':
				// Set desired template
				$this->tpl_name = 'mods/mod_list';
				$this->page_title = 'MODS_LIST';

				$found = $this->mod_list($category);

				if (!$found)
				{
					$categories = titania::$cache->get_categories(TAG_TYPE_MOD_CATEGORY);
					titania::error_box('ERROR', sprintf($user->lang['NO_MODS'], $categories[$category]['name']), TITANIA_ERROR);
					$this->main($id, 'categories');
					return;
				}
			break;

			case 'categories':
			default:
				// Set desired template
				$this->tpl_name = 'mods/mod_categories';
				$this->page_title = 'MODS_CATEGORIES';

				$this->mod_categories();
			break;
		}
	}

	/**
	 * MOD Categories
	 */
	public function mod_categories()
	{
		global $template, $user;

		$categories = titania::$cache->get_categories(TAG_TYPE_MOD_CATEGORY);

		foreach ($categories as $row)
		{
			$template->assign_block_vars('category', array(
				'U_CATEGORY'=> append_sid($this->page, 'mode=list&amp;category=' . $row['id']),
				'ID'		=> $row['id'],
				'TITLE'		=> $row['name'],
				'DESC'		=> $row['desc'],
			));
		}
	}

	/**
	 * MOD list and search results
	 */
	public function mod_list($category)
	{
		global $db, $template, $user;

		if (!class_exists('sort'))
		{
			require TITANIA_ROOT . 'includes/tools/sort.' . PHP_EXT;
		}

		if (!class_exists('pagination'))
		{
			require TITANIA_ROOT . 'includes/tools/pagination.' . PHP_EXT;
		}

		$sort = new sort();
		$pagination = new pagination();

		$sort->set_sort_keys(array(
			array('SORT_AUTHOR',		'a.author_username_clean', 'default' => true),
			array('SORT_TIME_ADDED',	'c.contrib_release_date'),
			array('SORT_TIME_UPDATED',	'c.contrib_update_date'),
			array('SORT_DOWNLOADS',		'c.contrib_downloads'),
			array('SORT_RATING',		'c.contrib_rating'),
			array('SORT_CONTRIB_NAME',	'c.contrib_name'),
		));

		$sort->sort_request(false);

		$sql_ary = array(
			'SELECT'	=> 'c.*, a.user_id, a.author_username, u.user_colour',
			'FROM'		=> array(TITANIA_CONTRIBS_TABLE => 'c'),
			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array(TITANIA_CONTRIB_TAGS_TABLE => 't'),
					'ON'	=> 't.contrib_id = c.contrib_id',
				),
				array(
					'FROM'	=> array(TITANIA_AUTHORS_TABLE => 'a'),
					'ON'	=> 'a.user_id = c.contrib_user_id',
				),
				array(
					'FROM'	=> array(USERS_TABLE => 'u'),
					'ON'	=> 'u.user_id = a.user_id',
				),
			),
			'WHERE'		=> 't.tag_id = ' . $category . '
							AND c.contrib_status = ' .  TITANIA_STATUS_APPROVED,
			'ORDER_BY'	=> $sort->get_order_by(),
		);
		$sql = $db->sql_build_query('SELECT', $sql_ary);
		$result = $db->sql_query_limit($sql, $pagination->get_limit(), $pagination->get_start());

		$results = 0;
		while ($row = $db->sql_fetchrow($result))
		{
			$results++;

			$profile_url = append_sid(TITANIA_ROOT . 'authors/index.' . PHP_EXT, 'mode=profile');

			$template->assign_block_vars('contrib', array(
				'ID'			=> $row['contrib_id'],
				'U_CONTRIB'		=> append_sid($this->page, 'mode=details&amp;mod=' . $row['contrib_id']),
				'TITLE'			=> $row['contrib_name'],
				'DESC'			=> $row['contrib_description'],
				'RATING'		=> round($row['contrib_rating'], 2),
				'DOWNLOADS'		=> $row['contrib_downloads'],
				'ADDED'			=> $user->format_date($row['contrib_release_date']),
				'UPDATED'		=> $user->format_date($row['contrib_update_date']),
				'VERSION'		=> $row['contrib_version'],
				'AUTHOR'		=> sprintf($user->lang['AUTHOR_BY'], get_username_string('full', $row['user_id'], $row['author_username'], $row['user_colour'], false, $profile_url)),
			));
		}
		$db->sql_freeresult($result);

		if (!$results)
		{
			return false;
		}

		$pagination->sql_total_count($sql_ary, 'c.contrib_id', $results);

		$pagination->set_params(array(
			'sk'		=> $sort->get_sort_key(false),
			'sd'		=> $sort->get_sort_dir(false),
			'category'	=> $category,
		));

		$pagination->build_pagination($this->u_action);

		$template->assign_vars(array(
			'S_MODE_SELECT'		=> $sort->get_sort_key_list(),
			'S_ORDER_SELECT'	=> $sort->get_sort_dir_list(),
		));

		return true;
	}

	private function mod_details($category)
	{

	}
}