<?php
/**
*
* @package Titania
* @version $Id: converter.php 1556 2010-06-15 00:25:31Z exreaction $
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
	'COULD_NOT_FIND_TRANSLATION_ROOT'			=> 'Não foi possível localizar a diretoria raiz do seu pacote de idiomas. Verifique se existe a diretoria <code>language/</code> e, opcionalmente <code>styles/</code>, no nível superior.',

	'MISSING_FILE'								=> 'O ficheiro <code>%s</code> no seu language pack',
	'MISSING_KEYS'								=> 'Falta es seguintes chaves de linguagem em <code>%1$s</code>:<br />%2$s',

	'PASSED_VALIDATION'							=> 'O language pack passou o processo de validação que verifica a falta de chaves, ficheiros de licença and which repackages your translation, por favor continue.',

	'TRANSLATION'								=> 'Translation',
	'TRANSLATION_VALIDATION'					=> '[phpBB Translation-Validation] %1$s %2$s',
	'TRANSLATION_VALIDATION_MESSAGE_APPROVE'	=> 'Thank you for submitting your Translation to the phpBB.com Customisation Database. After careful inspection your translation has been approved and released into our Customisation Database.

It is our hope that you will provide a basic level of support for this translation and keep it updated with future releases of phpBB. We appreciate your work and contribution to the community. Authors like yourself make phpBB.com a better place for everyone.

[b]Notes from the Team about your translation:[/b]
[quote]%s[/quote]

Atenciosamente,
A Equipa phpBB',
	'TRANSLATION_VALIDATION_MESSAGE_DENY'		=> 'Olá,

Como certamente sabe, todas as Traduções submetidas à Base de Dados Personalizada do phpBB devem ser validadas e aprovadas pelos membros da Equipa phpBB.

Relativamente à validação da sua Tradução, a equipa phpBB lamenta informar que a mesma foi negada.

To correct the problem(s) with your translation, please following the below instructions:
[list=1][*]Make the necessary changes to correct any problems (listed below) that resulted in your translation being denied.
[*]Re-upload your translation to our Customisation Database.[/list]
Please ensure you tested your translation on the latest version of phpBB (see the [url=http://www.phpbb.com/downloads/]Downloads[/url] page) before you re-submit your translation.

Se considera a rejeição injustificada, entre em contato com o gestor de Traduções.

O relatório sobre as razões que levaram à reprovação da sua tradução é o seguinte:
[quote]%s[/quote]

Obrigado,
A Equipa phpBB',
));
