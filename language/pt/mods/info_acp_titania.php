<?php
/**
* titania acp language [portuguese]
*
* @package language
* @version $Id$
* @copyright (c) 2008 phpBB Customisation Database Team
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Traduzido por: http://phpbbportugal.com - segundo as normas do Acordo Ortográfico
*/
/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ROLE_TITANIA_MODIFICATION_TEAM'	=> 'Permissões do Grupo Titania de Modificações',
	'ROLE_TITANIA_STYLE_TEAM'			=> 'Permissões do Grupo Titania de Estilos',
	'ROLE_TITANIA_MODERATOR_TEAM'		=> 'Permissões do Grupo Titania de Moderadores',
	'ROLE_TITANIA_ADMINISTRATOR_TEAM'	=> 'Permissões do Grupo Titania de Administradores',
));

?>