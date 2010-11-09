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
	'CONVERTER'								=> 'Conversor',
	'CONVERTERS'							=> 'Conversores',
	'CONVERTER_VALIDATION'					=> '[phpBB validação de conversores] %1$s %2$s',
	'CONVERTER_VALIDATION_MESSAGE_APPROVE'	=> 'Obrigado por enviar o seu Conversor para a Base de Dados Personalizada do phpBB.com. Depois de uma inspeção cuidadosa o seu Conversor foi aprovado e divulgado na nossa Base de Dados Personalizada.

Esperamos que ofereça um nível básico de suporte para este conversor e que o mantenha atualizado em futuras versões do phpBB. Nós apreciamos seu trabalho e contributo para a comunidade. Authors like yourself make phpBB.com a better place for everyone.

[b]Notas da Equipa sobre o seu Conversor:[/b]
[quote]%s[/quote]

Atenciosamente,
A Equipa phpBB',
	'CONVERTER_VALIDATION_MESSAGE_DENY'		=> 'Olá,

Como certamente sabe, todos os Conversores submetidos à Base de Dados Personalizada do phpBB devem ser validadas e aprovadas pelos membros da Equipa phpBB.

Relativamente à validação do seu Conversor, a equipa phpBB lamenta informar que a mesma foi negada.

To correct the problem(s) with your convertor, please following the below instructions:
[list=1][*]Make the necessary changes to correct any problems (listed below) that resulted in your convertor being denied.
[*]Re-upload your convertor to our Customisation Database.[/list]
Please ensure you tested your convertor on the latest version of phpBB (see the [url=http://www.phpbb.com/downloads/]Downloads[/url] page) before you re-submit your convertor.

Se considera a rejeição injustificada, entre em contato com o lider da equipa de Desenvolvimento.

O relatório sobre as razões que levaram à reprovação do seu Conversor é o seguinte:
[quote]%s[/quote]

Obrigado,
A Equipa phpBB',
));
