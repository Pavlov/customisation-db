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
	'AUTHOR_CONTRIBS'			=> 'Contribuições',
	'AUTHOR_DATA_UPDATED'		=> 'Os dados do autor foram atualizados.',
	'AUTHOR_DESC'				=> 'Descrição do autor',
	'AUTHOR_DETAILS'			=> 'Detalhes do autor',
	'AUTHOR_MODS'				=> '%d Modificações',
	'AUTHOR_MODS_ONE'			=> '1 Modificação',
	'AUTHOR_NOT_FOUND'			=> 'O autor não foi encontrado',
	'AUTHOR_PROFILE'			=> 'Perfil do autor',
	'AUTHOR_RATING'				=> 'Classificação do autor',
	'AUTHOR_SNIPPETS'			=> '%d Snippets',
	'AUTHOR_SNIPPETS_ONE'		=> '1 Snippet',
	'AUTHOR_STATISTICS'			=> 'Estatísticas do autor',
	'AUTHOR_STYLES'				=> '%d Estilos',
	'AUTHOR_STYLES_ONE'			=> '1 Estilo',
	'AUTHOR_SUPPORT'			=> 'Suporte',

	'ENHANCED_EDITOR'			=> 'Enhanced Editor',
	'ENHANCED_EDITOR_EXPLAIN'	=> 'Enable/disable the enhanced editor (captures tabs and automatically expands textareas).',

	'MANAGE_AUTHOR'				=> 'Administrar Autor',

	'NO_AVATAR'					=> 'Sem avatar',

	'PHPBB_PROFILE'				=> 'Perfil phpBB.com',

	'REAL_NAME'					=> 'Nome real',

	'USER_INFORMATION'			=> '’s informações do utilizador',

	'VIEW_USER_PROFILE'			=> 'Ver perfil do utilizador',
));
