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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACCESS_LIMIT_AUTHORS'		=> 'Author-level access limit',
	'ACCESS_LIMIT_TEAMS'		=> 'Team-level access limit',
	'ADD_FIELD'					=> 'Adicionar Campo',
	'AGREE'						=> 'Concordo',
	'AGREEMENT'					=> 'Acordo',
	'ALL'						=> 'Tudo',
	'ALL_CONTRIBUTIONS'			=> 'Todas as contribuições',
	'ALL_SUPPORT'				=> 'Todos os tópicos de suporte',
	'AUTHOR_BY'					=> 'By %s',

	'BAD_RATING'				=> 'Rating attempt failed.',
	'BY'						=> 'de',

	'CACHE_PURGED'				=> 'A Cache foi limpa com sucesso',
	'CATEGORY'					=> 'Categoria',
	'CATEGORY_CHILD_AS_PARENT'	=> 'The chosen parent category cannot be selected because it is a child of this category.',
	'CATEGORY_DELETED'			=> 'Categoria eliminada',
	'CATEGORY_DESC'				=> 'Descrição da Categoria',
	'CATEGORY_DUPLICATE_PARENT'	=> 'Category cannot be its own parent.',
	'CATEGORY_HAS_CHILDREN'		=> 'This category cannot be deleted because it contains children categories.',
	'CATEGORY_INFORMATION'		=> 'Category Information',
	'CATEGORY_NAME'				=> 'Nome da Categoria',
	'CATEGORY_TYPE'				=> 'Tipo de Categoria',
	'CATEGORY_TYPE_EXPLAIN'		=> 'The type of contributions this category will hold. Leave unset to not accept contributions.',
	'CAT_ADDONS'				=> 'Add-ons',
	'CAT_ANTI_SPAM'				=> 'Anti-Spam',
	'CAT_AVATARS'				=> 'Avatars',
	'CAT_BOARD_STYLES'			=> 'Board Styles',
	'CAT_COMMUNICATION'			=> 'Communication',
	'CAT_COSMETIC'				=> 'Cosmetic',
	'CAT_ENTERTAINMENT'			=> 'Entertainment',
	'CAT_LANGUAGE_PACKS'		=> 'Language Packs',
	'CAT_MISC'					=> 'Miscellaneous',
	'CAT_MODIFICATIONS'			=> 'Modifications',
	'CAT_PROFILE_UCP'			=> 'Profile/User Control Panel',
	'CAT_RANKS'					=> 'Ranks',
	'CAT_SECURITY'				=> 'Security',
	'CAT_SMILIES'				=> 'Smilies',
	'CAT_SNIPPETS'				=> 'Snippets',
	'CAT_STYLES'				=> 'Styles',
	'CAT_TOOLS'					=> 'Tools',
	'CLOSED_BY'					=> 'Closed by',
	'CLOSED_ITEMS'				=> 'Closed Items',
	'CONFIRM_PURGE_CACHE'		=> 'Are you sure you want to purge the cache?',
	'CONTINUE'					=> 'Continue',
	'CONTRIBUTION'				=> 'Contribution',
	'CONTRIBUTIONS'				=> 'Contributions',
	'CONTRIB_FAQ'				=> 'FAQ',
	'CONTRIB_MANAGE'			=> 'Gestão da Contribuição',
	'CONTRIB_SUPPORT'			=> 'Discussão/Suporte',
	'CREATE_CATEGORY'			=> 'Criar Categoria',
	'CREATE_CONTRIBUTION'		=> 'Criar Contribuição',
	'CUSTOMISATION_DATABASE'	=> 'Base de Dados Personalizada',

	'DATE_CLOSED'				=> 'Date closed',
	'DELETED_MESSAGE'			=> 'Last deleted by %1$s on %2$s - <a href="%3$s">Click here to undelete this message</a>',
	'DELETE_ALL_CONTRIBS'		=> 'Delete all Contributions',
	'DELETE_CATEGORY'			=> 'Delete Category',
	'DELETE_SUBCATS'			=> 'Delete Subcategories',
	'DESCRIPTION'				=> 'Descrição',
	'DESTINATION_CAT_INVALID'	=> 'The destination category is not able to accept contributions.',
	'DETAILS'					=> 'Details',
	'DOWNLOAD'					=> 'Download',
	'DOWNLOADS'					=> 'Downloads',
	'DOWNLOAD_ACCESS_DENIED'	=> 'You are not allowed to download the requested file.',
	'DOWNLOAD_NOT_FOUND'		=> 'The requested file could not be found.',

	'EDIT'						=> 'Edit',
	'EDITED_MESSAGE'			=> 'Last edited by %1$s on %2$s',
	'EDIT_CATEGORY'				=> 'Edit Category',
	'ERROR'						=> 'Error',

	'FILE_NOT_EXIST'			=> 'File does not exist: %s',
	'FIND_CONTRIBUTION'			=> 'Procurar contribuição',

	'HARD_DELETE'				=> 'Hard Delete',
	'HARD_DELETE_EXPLAIN'		=> 'Select to permanently delete this item.',
	'HARD_DELETE_TOPIC'			=> 'Hard Delete Topic',

	'LANGUAGE_PACK'				=> 'Language Pack',
	'LIST'						=> 'List',

	'MAKE_CATEGORY_VISIBLE'		=> 'Make Category Visible',
	'MANAGE'					=> 'Administrar',
	'MARK_CONTRIBS_READ'		=> 'Marcar contribuições como lidas',
	'MOVE_CONTRIBS_TO'			=> 'Move Contributions to',
	'MOVE_DOWN'					=> 'Move down',
	'MOVE_SUBCATS_TO'			=> 'Move Subcategories to',
	'MOVE_UP'					=> 'Move up',
	'MULTI_SELECT_EXPLAIN'		=> 'Pressione a tecla CTRL ou Shift para selecionar uma a uma ou várias Categorias.',
	'MY_CONTRIBUTIONS'			=> 'As minhas contribuições',

	'NAME'						=> 'Name',
	'NEW_REVISION'				=> 'Nova Revisão',
	'NOT_AGREE'					=> 'Não concordo',
	'NO_AUTH'					=> 'Não está autorizado a ver esta página.',
	'NO_CATEGORY'				=> 'The requested category does not exist.',
	'NO_CATEGORY_NAME'			=> 'Introduza o nome da categoria',
	'NO_CONTRIB'				=> 'The requested contribution does not exist.',
	'NO_CONTRIBS'				=> 'Não foram encontradas contribuições',
	'NO_DESC'					=> 'You have to enter the description.',
	'NO_DESTINATION_CATEGORY'	=> 'No destination category could be found.',
	'NO_POST'					=> 'The requested post does not exist.',
	'NO_REVISION_NAME'			=> 'No revision name provided',
	'NO_TOPIC'					=> 'The requested topic does not exist.',

	'ORDER'						=> 'Order',

	'PARENT_CATEGORY'			=> 'Parent Category',
	'PARENT_NOT_EXIST'			=> 'Parent does not exist.',
	'POST_IP'					=> 'Post IP',
	'PURGE_CACHE'				=> 'Limpar Cache',

	'QUEUE'						=> 'Fila',
	'QUEUE_DISCUSSION'			=> 'Fila de Discussão',
	'QUICK_ACTIONS'				=> 'Ações Rápidas',

	'RATING'					=> 'Classificação',
	'REMOVE_RATING'				=> 'Eliminar Classificação',
	'REPORT'					=> 'Denunciar',
	'RETURN_LAST_PAGE'			=> 'Regressar à página anterior',
	'ROOT'						=> 'Root',

	'SEARCH_UNAVAILABLE'		=> 'The search system is currently unavailable.  Please try again in a few minutes.',
	'SELECT_CATEGORY'			=> '-- Selecione Categoria --',
	'SELECT_CATEGORY_TYPE'		=> '-- Selecione Tipo de Categoria --',
	'SELECT_SORT_METHOD'		=> 'Ordenar por',
	'SHOW_ALL_REVISIONS'		=> 'Ver todas as revisões',
	'SITE_INDEX'				=> 'Índice do Fórum',
	'SNIPPET'					=> 'Snippet',
	'SOFT_DELETE_TOPIC'			=> 'Soft Delete Topic',
	'SORT_CONTRIB_NAME'			=> 'Nome da Contribuição',
	'STICKIES'					=> 'Stickies',
	'SUBSCRIBE'					=> 'Subscrever',
	'SUBSCRIPTION_NOTIFICATION'	=> 'Notificação de subscrição',

	'TITANIA_DISABLED'			=> 'A Base de Dados Personalizada está desativada temporariamente, por favor volte a tentar dentro de alguns minutos.',
	'TITANIA_INDEX'				=> 'Base de Dados Personalizada',
	'TOTAL_CONTRIBS'			=> '%d Contribuições',
	'TOTAL_CONTRIBS_ONE'		=> '1 Contribuição',
	'TOTAL_POSTS'				=> '%d Mensagens',
	'TOTAL_POSTS_ONE'			=> '1 Mensagem',
	'TOTAL_RESULTS'				=> '%d Resultados',
	'TOTAL_RESULTS_ONE'			=> '1 Resultado',
	'TOTAL_TOPICS'				=> '%d Tópicos',
	'TOTAL_TOPICS_ONE'			=> '1 Tópico',
	'TRANSLATION'				=> 'Tradução',
	'TRANSLATIONS'				=> 'Traduções',
	'TYPE'						=> 'Tipo',

	'UNDELETE_TOPIC'			=> 'Anular eliminação de Tópico',
	'UNKNOWN'					=> 'Desconhecido',
	'UNSUBSCRIBE'				=> 'Anular',
	'UPDATE_TIME'				=> 'Atualizado',

	'VERSION'					=> 'Versão',
	'VIEW'						=> 'Ver',
));
