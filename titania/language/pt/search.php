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
if (!defined('IN_TITANIA'))
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

$lang = array_merge($lang, array(
	'CONTRIBUTION_NAME_DESCRIPTION'	=> 'Contribuição Nome/Descrição',
	'CONTRIB_FAQ'					=> 'Contribuição FAQ',
	'CONTRIB_NAME_DESCRIPTION'		=> 'Contribuição Nome e Descrição',
	'CONTRIB_SUPPORT'				=> 'Contribuição Discussão/Suporte',

	'SEARCH_KEYWORDS_EXPLAIN'		=> 'Faça uma lista de palavras separadas por <strong>|</strong> se somente uma palavra deve ser encontrada. Use o <strong>*</strong> para resultados parciais.',
	'SEARCH_MSG_ONLY'				=> 'Apenas Texto/Descrição',
	'SEARCH_SUBCATEGORIES'			=> 'Procurar Subcategories',
	'SEARCH_TITLE_MSG'				=> 'Títulos e Texto/Descrição',
	'SEARCH_TITLE_ONLY'				=> 'Apenas Títulos',
	'SEARCH_WITHIN_TYPES'			=> 'Pesquisa dentro dos tipos',
));
