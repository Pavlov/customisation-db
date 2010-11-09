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
	'ACCESS'							=> 'Nível de Acesso',
	'ACCESS_AUTHORS'					=> 'Acesso a autores',
	'ACCESS_PUBLIC'						=> 'Acesso público',
	'ACCESS_TEAMS'						=> 'Acesso a equipas',
	'ATTACH'							=> 'Anexar',

	'FILE_DELETED'						=> 'Este ficheiro será apagado quando enviar',

	'HARD_DELETE_TOPIC_CONFIRM'			=> 'Tem a certeza que deseja apagar <strong>permamentemente</strong> este tópico?<br /><br />Este tópico desaparecerá para sempre!',

	'QUEUE_DISCUSSION_TOPIC_MESSAGE'	=> 'Este tópico destina-se a discutir a validação entre contribuintes e validadores.

Tudo o que escrver aqui é lido por quem vai validar a sua contribuição. Por isso coloque aqui a sua mensagem em vez de a enviar por mensagem privada.

A equipa de validação também pode questionar aqui os autores. Por favor responda com informações úteis, pois podem ser necessárias para continuar o procedimento de validação.

Note que por omissão, este tópico é privado entre os autores e os validadores e não é visto pelo público.',
	'QUEUE_DISCUSSION_TOPIC_TITLE'		=> 'Discussão de validação - %s',

	'REPORT_POST_CONFIRM'				=> 'Utilize este formulário para denunciar a mensagem selecionada a moderadores e administradores. A denúncia apenas deve ser usada quando a mensagem violar as regras do fórum.',

	'SOFT_DELETE_TOPIC_CONFIRM'			=> 'Tem certeza que deseja <strong>apagar</strong> este tópico?',
	'STICKIES'							=> 'Stickies',
	'STICKY_TOPIC'						=> 'Sticky Topic',

	'UNDELETE_FILE'						=> 'Cancelar exclusão',
	'UNDELETE_POST'						=> 'Repor mensagem',
	'UNDELETE_POST_CONFIRM'				=> 'Tem certeza que deseja desfazer a exclusão desta mensagem?',
	'UNDELETE_TOPIC_CONFIRM'			=> 'Tem certeza que deseja desfazer a exclusão deste tópico?',
));
