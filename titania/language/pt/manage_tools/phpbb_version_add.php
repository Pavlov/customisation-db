<?php
/**
*
* @package Titania
* @version $Id$
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
	'CATEGORY_EXPLAIN'				=> 'Limitar suporte da nova versão apenas às categorias selecionadas.',

	'NEW_PHPBB_VERSION'				=> 'Nova versão phpBB',
	'NEW_PHPBB_VERSION_EXPLAIN'		=> 'Nova versão phpBB da lista de suporte para novas versões.',
	'NO_REVISIONS_UPDATED'			=> 'Não foram enviadas revisões para as limitações dadas.',
	'NO_VERSION_SELECTED'			=> 'Introduza uma versão correta do phpBB.  Exemplo: 3.0.7 or 3.0.7-PL1.',

	'PHPBB_VERSION_ADD'				=> 'Adicionar versão phpBB para suporte de revisões',

	'REVISIONS_UPDATED'				=> '%s revisões foram atualizadas.',

	'VERSION_RESTRICTION'			=> 'Limite de Versão',
	'VERSION_RESTRICTION_EXPLAIN'	=> 'Limitar o Suporte da nova versão às versões selecionadas.',
));
