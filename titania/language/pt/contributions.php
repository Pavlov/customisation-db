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
'CUSTOM_LICENSE' => 'Custom',
	'ANNOUNCEMENT_TOPIC'					=> 'Tópico de Anúncio',
	'ANNOUNCEMENT_TOPIC_SUPPORT'			=> 'Tópico de Suporte',
	'ANNOUNCEMENT_TOPIC_VIEW'				=> '%Ver%s',
	'ATTENTION_CONTRIB_CATEGORIES_CHANGED'	=> '<strong>Contribution categories changed from:</strong><br />%1$s<br /><br /><strong>to:</strong><br />%2$s',
	'ATTENTION_CONTRIB_DESC_CHANGED'		=> '<strong>Contribution description changed from:</strong><br />%1$s<br /><br /><strong>to:</strong><br />%2$s',
	'AUTOMOD_RESULTS'						=> '<strong>Please check over the AutoMod install results and make sure that nothing needs to be fixed.<br /><br />If an error comes up and you are certain that the error is incorrect, just hit continue below.</strong>',
	'AUTOMOD_TEST'							=> 'The Mod will be tested against AutoMod and results will be shown (this may take a few moments, so please be patient).<br /><br />Please hit continue when you are ready.',

	'BAD_VERSION_SELECTED'					=> '%s is not a proper phpBB version.',

	'CANNOT_ADD_SELF_COAUTHOR'				=> 'Sendo Proprietário não pode ser simultaneamente Coautor',
	'CLEANED_CONTRIB'						=> 'Cleaned contribution',
	'CONTRIB'								=> 'Contribuição',
	'CONTRIBUTIONS'							=> 'Contribuições',
	'CONTRIB_ACTIVE_AUTHORS'				=> 'Coautores Ativos',
	'CONTRIB_ACTIVE_AUTHORS_EXPLAIN'		=> 'Coautores Ativos podem gerir a maior parte das contribuições.',
	'CONTRIB_APPROVED'						=> 'Aprovada',
	'CONTRIB_AUTHOR'						=> 'Autor da Contribuição',
	'CONTRIB_AUTHORS_EXPLAIN'				=> 'Introduza os nomes dos Coautores, um nome por linha.',
	'CONTRIB_CATEGORY'						=> 'Categoria da Contribuição',
	'CONTRIB_CHANGE_OWNER'					=> 'Alterar Proprietário',
	'CONTRIB_CHANGE_OWNER_EXPLAIN'			=> 'Introduza o nome do utilizador que quer para definir como o proprietário. <strong>Atenção:</strong> Fica autor não contribuinte.',
	'CONTRIB_CHANGE_OWNER_NOT_FOUND'		=> 'The user you attempted to set as owner, %s, was not found.',
	'CONTRIB_CLEANED'						=> 'Cleaned',
	'CONTRIB_CONFIRM_OWNER_CHANGE'			=> 'Are you sure you want to assign ownership to %s? This will prevent you from managing the project and can not be undone.',
	'CONTRIB_CREATED'						=> 'The contribution has been created successfully',
	'CONTRIB_DESCRIPTION'					=> 'Descrição da Contribuição',
	'CONTRIB_DETAILS'						=> 'Detalhes da Contribuição',
	'CONTRIB_DISABLED'						=> 'Hidden + Disabled',
	'CONTRIB_DOWNLOAD_DISABLED'				=> 'Transferências desativadas',
	'CONTRIB_EDITED'						=> 'A contribuição foi editada com sucesso.',
	'CONTRIB_HIDDEN'						=> 'Hidden',
	'CONTRIB_ISO_CODE'						=> 'Código ISO',
	'CONTRIB_ISO_CODE_EXPLAIN'				=> 'The ISO code according to the <a href="http://area51.phpbb.com/docs/coding-guidelines.html#translation">Translation Coding Guidelines</a>.',
	'CONTRIB_LOCAL_NAME'					=> 'Local name',
	'CONTRIB_LOCAL_NAME_EXPLAIN'			=> 'The localized name of the language, e.g. <em>Français</em>.',
	'CONTRIB_NAME'							=> 'Nome da Contribuição',
	'CONTRIB_NAME_EXISTS'					=> 'The unique name has already been reserved.',
	'CONTRIB_NEW'							=> 'Nova',
	'CONTRIB_NONACTIVE_AUTHORS'				=> 'Coautores Inativos (Coautores anteriores)',
	'CONTRIB_NONACTIVE_AUTHORS_EXPLAIN'		=> 'Coautores Inativos não podem gerir nada da contribuição. São apenas listados como Coautores anteriores.',
	'CONTRIB_NOT_FOUND'						=> 'The contribution you requested could not be found.',
	'CONTRIB_OWNER_UPDATED'					=> 'O Proprietário foi alterado.',
	'CONTRIB_PERMALINK'						=> 'Contribution Permalink',
	'CONTRIB_PERMALINK_EXPLAIN'				=> 'Nome da contribuição a usar para construir a URL da contribuição.<br /><strong>Deixe em branco para criar automaticamente a URL com base no nome da contribuição.</strong>',
	'CONTRIB_RELEASE_DATE'					=> 'Release date',
	'CONTRIB_STATUS'						=> 'Estatuto da Contribuição',
	'CONTRIB_STATUS_EXPLAIN'				=> 'Alterar estatuto da contribuição',
	'CONTRIB_TYPE'							=> 'Tipo de Contribuição',
	'CONTRIB_UPDATED'						=> 'A contribuição foi atualizada com sucesso.',
	'CONTRIB_UPDATE_DATE'					=> 'Última Aprovação',
	'COULD_NOT_FIND_ROOT'					=> 'Could not find the main directory.  Please ensure there is an xml file with the name install in it somewhere in the zip package.',
	'COULD_NOT_FIND_USERS'					=> 'Não foi possível encontrar os seguintes utilizadores: %s',
	'COULD_NOT_OPEN_MODX'					=> 'Could not open ModX file.',
	'CO_AUTHORS'							=> 'Co-Authors',

	'DELETE_CONTRIBUTION'					=> 'Apagar Contribuição',
	'DELETE_CONTRIBUTION_EXPLAIN'			=> 'Remover a contribuição permanentemente (use o campo de <strong>Estatuto da Contribuição</strong> para a esconder).',
	'DELETE_REVISION'						=> 'Delete Revision',
	'DELETE_REVISION_EXPLAIN'				=> 'Permanently remove this revision (use the revision status field if you need to hide it).',
	'DEMO_URL'								=> 'URL da demonstração',
	'DEMO_URL_EXPLAIN'						=> 'Localização da demonstração',
	'DOWNLOADS_PER_DAY'						=> '%.2f Transferências diárias',
	'DOWNLOADS_TOTAL'						=> 'Total de transferências',
	'DOWNLOADS_VERSION'						=> 'Version Downloads',
	'DOWNLOAD_CHECKSUM'						=> 'MD5 checksum',
	'DUPLICATE_AUTHORS'						=> 'Os seguintes autores estão definidos como ativos e não ativos (não podem ser ambos): %s',

	'EDIT_REVISION'							=> 'Edit Revision',
	'EMPTY_CATEGORY'						=> 'Select one category at least',
	'EMPTY_CONTRIB_DESC'					=> 'Enter the contrib description',
	'EMPTY_CONTRIB_ISO_CODE'				=> 'Enter the ISO Code',
	'EMPTY_CONTRIB_LOCAL_NAME'				=> 'Enter the local name',
	'EMPTY_CONTRIB_NAME'					=> 'Enter the contrib name',
	'EMPTY_CONTRIB_PERMALINK'				=> 'Enter your proposal for permalink for the contribution',
	'EMPTY_CONTRIB_TYPE'					=> 'Select at least one contribution type',
	'ERROR_CONTRIB_EMAIL_FRIEND'			=> 'You are not permitted to recommend this contribution to someone else.',

	'INVALID_LICENSE'						=> 'Licença inválida',
	'INVALID_PERMALINK'						=> 'Tem que introduzir um permalink, por exemplo: %s',

	'LICENSE'								=> 'License',
	'LICENSE_EXPLAIN'						=> 'License to release this work under.',
	'LOGIN_EXPLAIN_CONTRIB'					=> 'In order to create a new contribution you need to be registered',

	'MANAGE_CONTRIBUTION'					=> 'Gestão da Contribuição',
	'MPV_RESULTS'							=> '<strong>Please check over the MPV results and make sure that nothing needs to be fixed.<br /><br />If you do not think anything requires fixing or you are not sure, just hit continue below.</strong>',
	'MPV_TEST'								=> 'The Mod will be tested against MPV and results will be shown (this may take a few moments, so please be patient).<br /><br />Please hit continue when you are ready.',
	'MPV_TEST_FAILED'						=> 'Sorry, the automatic MPV test failed and your MPV test results are not available.  Please continue.',
	'MPV_TEST_FAILED_QUEUE_MSG'				=> 'Automated MPV test failed.  [url=%s]Click here to attempt running MPV automatically again[/url]',
	'MUST_SELECT_ONE_VERSION'				=> 'You must select at least one phpBB version.',

	'NEW_CONTRIBUTION'						=> 'New Contribution',
	'NEW_REVISION'							=> 'Nova Revisão',
	'NEW_REVISION_SUBMITTED'				=> 'New revision has been submitted successfully!',
	'NEW_TOPIC'								=> 'New Topic',
	'NOT_VALIDATED'							=> 'Not Validated',
	'NO_CATEGORY'							=> 'The selected category does not exist',
	'NO_PHPBB_BRANCH'						=> 'You must select a phpBB branch.',
	'NO_QUEUE_DISCUSSION_TOPIC'				=> 'No Queue Discussion topic could be found.  Have you submitted any revision for this contribution yet (it will be created when you do so)?',
	'NO_REVISIONS'							=> 'Não há Revisões',
	'NO_REVISION_ATTACHMENT'				=> 'Selecione um ficheiro para enviar',
	'NO_REVISION_VERSION'					=> 'Introduza a Versão da Revisão',
	'NO_SCREENSHOT'							=> 'Não há imagens',
	'NO_TRANSLATION'						=> 'The archive does not appear to be a valid language package. Please ensure it contains all the files found in the English language directory',

	'PHPBB_BRANCH'							=> 'phpBB Branch',
	'PHPBB_BRANCH_EXPLAIN'					=> 'Select the phpBB branch that this revision supports.',
	'PHPBB_VERSION'							=> 'Versão do phpBB',

	'QUEUE_ALLOW_REPACK'					=> 'Permitir Recompilação',
	'QUEUE_ALLOW_REPACK_EXPLAIN'			=> 'Permitir a recompilação da contribuição devido a pequenos erros?',
	'QUEUE_NOTES'							=> 'Notas de Validação',
	'QUEUE_NOTES_EXPLAIN'					=> 'Mensagem à equipa.',

	'REPORT_CONTRIBUTION'					=> 'Report Contribution',
	'REPORT_CONTRIBUTION_CONFIRM'			=> 'Use this form to report the selected contribution to the moderators and administrators. Reporting should generally be used only if the contribution breaks forum rules.',
	'REVISION'								=> 'Revision',
	'REVISIONS'								=> 'Revisões',
	'REVISION_APPROVED'						=> 'Approved',
	'REVISION_DENIED'						=> 'Denied',
	'REVISION_IN_QUEUE'						=> 'You already have a revision in the validation queue.  You must wait until the previous revision is approved or denied to submit a new one.',
	'REVISION_NAME'							=> 'Nome da Revisão',
	'REVISION_NAME_EXPLAIN'					=> 'Introduza um nome alternativo desta versão (ex: Edição de Ouro)',
	'REVISION_NEW'							=> 'New',
	'REVISION_PENDING'						=> 'Pending',
	'REVISION_PULLED_FOR_OTHER'				=> 'Pulled',
	'REVISION_PULLED_FOR_SECURITY'			=> 'Pulled - Security',
	'REVISION_REPACKED'						=> 'Repacked',
	'REVISION_RESUBMITTED'					=> 'Resubmitted',
	'REVISION_STATUS'						=> 'Revision Status',
	'REVISION_STATUS_EXPLAIN'				=> 'Change the revision status',
	'REVISION_SUBMITTED'					=> 'The revision has been submitted successfully.',
	'REVISION_VERSION'						=> 'Versão Número',
	'REVISION_VERSION_EXPLAIN'				=> 'Número da versão desta revisão',

	'SCREENSHOTS'							=> 'Imagens',
	'SELECT_CONTRIB_TYPE'					=> '-- Selecione o Tipo de Contribuição --',
	'SELECT_PHPBB_BRANCH'					=> 'Select phpBB branch',
	'SUBDIRECTORY_LIMIT'					=> 'Packages are not allowed to be more than 50 subdirectories deep at any point.',
	'SUBMIT_NEW_REVISION'					=> 'Submit and add new revision',

	'TOO_MANY_TRANSLATOR_LINKS'				=> 'You are currently using %d external links within the TRANSLATION/TRANSLATION_INFO line. Please only include <strong>one link</strong>. Including two links is allowed on a case-by-case basis - please post within the translations forum noting your reasoning behind putting more external links within the line.',

	'VALIDATION_TIME'						=> 'Validation time',
	'VIEW_DEMO'								=> 'Ver Demonstração',
	'VIEW_INSTALL_FILE'						=> 'Ver ficheiro de instalação',

	'WRONG_CATEGORY'						=> 'Tem que selecionar uma categoria de contribuição do tipo de contribuição que selecionou em Typo de Contribuição.',
));
