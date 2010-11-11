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
	'ADMINISTRATION'			=> 'Administração',
	'ALTER_NOTES'				=> 'Validação de notas de alteração',
	'APPROVE'					=> 'Aprovar',
	'APPROVE_QUEUE'				=> 'Fila de aprovação',
	'APPROVE_QUEUE_CONFIRM'		=> 'Tem a certeza que deseja <strong>aprovar</strong> este item?',
	'ATTENTION'					=> 'Atenção',

	'CATEGORY_NAME_CLEAN'		=> 'Categoria URL',
	'CHANGE_STATUS'				=> 'Alterar estatuto/mover',
	'CLOSED_ITEMS'				=> 'Items encerrados',

	'DELETE_QUEUE'				=> 'Apagar fila de exclusão',
	'DELETE_QUEUE_CONFIRM'		=> 'Tem a certeza que deseja apagar a fila de exclusão?  Todas as mensagens serão excluídas and the revision will be set to pulled if it is new.',
	'DENY'						=> 'Rejeitar',
	'DENY_QUEUE'				=> 'Rejeitar',
	'DENY_QUEUE_CONFIRM'		=> 'Tem a certeza que deseja <strong>rejeitar</strong> este item?',

	'EDIT_VALIDATION_NOTES'		=> 'Editar Notas de validação',

	'MANAGE_CATEGORIES'			=> 'Gerir Categorias',
	'MARK_IN_PROGRESS'			=> 'Marcar "Em Progresso"',
	'MARK_NO_PROGRESS'			=> 'Marcar "Sem Progresso"',
	'MOVE_QUEUE'				=> 'Mover lista',
	'MOVE_QUEUE_CONFIRM'		=> 'Selecione a localização da nova lista e confirme.',

	'NO_ATTENTION'				=> 'Não há item a precisar de atenção.',
	'NO_ATTENTION_ITEM'			=> 'Item a precisar de atenção não existe.',
	'NO_ATTENTION_TYPE'			=> 'Tipo de atenção inapropriado.',
	'NO_NOTES'					=> 'Não há notas',
	'NO_QUEUE_ITEM'				=> 'Este item não existe na lista.',

	'OLD_VALIDATION_AUTOMOD'	=> 'Teste de pré-recompilação Automod',
	'OLD_VALIDATION_MPV'		=> 'Notas de pré-recompilação MPV',
	'OPEN_ITEMS'				=> 'Items abertos',

	'PUBLIC_NOTES'				=> 'Notas públicas de lançamento',

	'QUEUE_APPROVE'				=> 'A aguardar aprovação',
	'QUEUE_ATTENTION'			=> 'Atenção',
	'QUEUE_DENY'				=> 'Aguarda rejeição',
	'QUEUE_DISCUSSION_TOPIC'	=> 'Lista de tópicos de discussão',
	'QUEUE_NEW'					=> 'Novo',
	'QUEUE_REPACK'				=> 'Recompilação',
	'QUEUE_REPACK_ALLOWED'		=> 'Recompilação admitida',
	'QUEUE_REPACK_NOT_ALLOWED'	=> 'Recompilação <strong>não</strong> admitida',
	'QUEUE_REPLY_APPROVED'		=> 'Revisão %1$s foi [b]aprovada[/b] pela seguinte razão:<br /><br />[quote]%2$s[/quote]',
	'QUEUE_REPLY_DENIED'		=> 'Revisão %1$s foi [b]rejeitada[/b] pela seguinte razão:<br /><br />[quote]%2$s[/quote]',
	'QUEUE_REPLY_IN_PROGRESS'	=> 'Marcado como em andamento',
	'QUEUE_REPLY_MOVE'			=> 'Movido de %1$s para %2$s',
	'QUEUE_REPLY_NO_PROGRESS'	=> 'Não marcado como em andamento',
	'QUEUE_REVIEW'				=> 'Fila de revisão',
	'QUEUE_STATUS'				=> 'Estatuto na fila',
	'QUEUE_TESTING'				=> 'A testar',
	'QUEUE_VALIDATING'			=> 'A validar',

	'REBUILD_FIRST_POST'		=> 'Refazer primeira mensagem',
	'REPACK'					=> 'Recompilação',
	'REPORTED'					=> 'Denunciado',
	'RETEST_AUTOMOD'			=> 'Testar de novo Automod',
	'RETEST_MPV'				=> 'Testar de novo MPV',
	'REVISION_REPACKED'			=> 'Esta revisão foi recompilada.',

	'SUBMIT_TIME'				=> 'Data apresentação',

	'UNAPPROVED'				=> 'Não aprovado',
	'UNKNOWN'					=> 'Desconhecido',

	'VALIDATION'				=> 'Validação',
	'VALIDATION_AUTOMOD'		=> 'Teste Automod',
	'VALIDATION_MESSAGE'		=> 'Mensagem de validação',
	'VALIDATION_MPV'			=> 'Notas MPV',
	'VALIDATION_NOTES'			=> 'Notas de validação',
	'VALIDATION_QUEUE'			=> 'Fila de validação',
	'VALIDATION_SUBMISSION'		=> 'Apresentação validação',
));
