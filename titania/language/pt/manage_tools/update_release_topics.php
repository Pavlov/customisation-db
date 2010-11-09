<?php
/**
*
* @package Titania
* @version $Id: update_release_topics.php 1032 2010-04-09 00:03:25Z rmcgirr83 $
* @copyright (c) 2008 phpBB Customisation Database Team
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Traduzido por: http://phpbbportugal.com - segundo as normas do Acordo Ortográfico
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'UPDATE_RELEASE_TOPICS'				=> 'Atualizar todos os tópicos das contribuições lançadas na Base de Dados do fórum',
	'UPDATE_RELEASE_TOPICS_COMPLETE'	=> 'Todos os tópicos das contribuições lançadas foram atualizados!',
	'UPDATE_RELEASE_TOPICS_CONFIRM'		=> 'Tem a certeza que deseja atualizar todos os tópicos das contribuições lançadas na Base de Dados do fórum? Isso pode demorar um longo período de tempo.',
	'UPDATE_RELEASE_TOPICS_PROGRESS'	=> 'Atualizados %1$s de %2$s tópicos. Por favor aguarde...',
));
