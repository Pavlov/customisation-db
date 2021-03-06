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
	'MODIFICATION'						=> 'Modificação',
	'MODIFICATIONS'						=> 'Modificações',
	'MOD_CREATE_PUBLIC'					=> '[b]Nome da Modificação[/b]: %1$s
[b]Autor:[/b] [url=%2$s]%3$s[/url]
[b]Descrição da Modificação[/b]: %4$s
[b]Versão da Modificação[/b]: %5$s
[b]Testada na versão do phpBB[/b]: Ver a seguir

[b]Transferir ficheiro[/b]: [url=%6$s]%7$s[/url]
[b]Tamanho do ficheiro:[/b] %8$s Bytes

[b]Página de resumo da Modificação:[/b] [url=%9$s]Ver[/url]

[color=blue][b]The phpBB Team is not responsible nor required to provide support for this modification. By installing this MOD, you acknowledge that the phpBB Support Team or phpBB Modifications Team may not be able to provide support.[/b][/color]

[size=150][url=%10$s]--&gt;[b]Modification support[/b]&lt;--[/url][/size]',
	'MOD_QUEUE_TOPIC'					=> '[b]Modification name[/b]: %1$s
[b]Author:[/b] [url=%2$s]%3$s[/url]
[b]Modification description[/b]: %4$s
[b]Modification version[/b]: %5$s

[b]Download file[/b]: [url=%6$s]%7$s[/url]
[b]File size:[/b] %8$s Bytes',
	'MOD_REPLY_PUBLIC'					=> '[b][color=darkred]Modification validated/released[/color][/b]',
	'MOD_REPLY_PUBLIC_NOTES'			=> '

[b]Notes:[/b] %s',
	'MOD_UPDATE_PUBLIC'					=> '[b][color=darkred]MOD Updated to version %1$s
See first post for Download Link[/color][/b]',
	'MOD_UPDATE_PUBLIC_NOTES'			=> '

[b]Notes:[/b] %1$s',
	'MOD_UPLOAD_AGREEMENT'				=> '<span style="font-size: 1.5em;">Ao apresentar esta revisão, concorda cumprir as <a href="http://www.phpbb.com/mods/policies/">MODifications database policies</a> e que a sua Modificação está conforme e segue a <a href="http://code.phpbb.com/svn/phpbb/branches/phpBB-3_0_0/phpBB/docs/coding-guidelines.html">phpBB3 Coding Guidelines</a>.

You also agree and accept that this MODification\'s license and the license of any included components are compatible with the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU GPLv2</a> and that you also allow the re-distributibution of your MODification through this website indefinitely. For a list of available licenses and licenses compatible with the GNU GPLv2 please reference the <a href="http://en.wikipedia.org/wiki/List_of_FSF_approved_software_licenses">list of FSF approved software licenses</a>.</span>',
	'MOD_VALIDATION'					=> '[phpBB MOD-Validation] %1$s %2$s',
	'MOD_VALIDATION_MESSAGE_APPROVE'	=> 'Thank you for submitting your modication to the phpBB.com modifications database. After careful inspection by the MOD Team your MOD has been approved and released into our modifications database.

It is our hope that you will provide a basic level of support for this modification and keep it updated with future releases of phpBB. We appreciate your work and contribution to the community. Authors like yourself make phpBB.com a better place for everyone.

[b]Notas da Equipa de Modificações sobre a sua Modificação:[/b]
[quote]%s[/quote]

Atenciosamente,
A Equipa phpBB',
	'MOD_VALIDATION_MESSAGE_DENY'		=> 'Olá,

Como certamente sabe, todas as Modificações submetidas à Base de Dados Personalizada do phpBB devem ser validadas e aprovadas pelos membros da Equipa phpBB.

Upon validating your modification the phpBB MOD Team regrets to inform you that we have had to deny your modification.

To correct the problem(s) with your modification, please following the below instructions:
[list=1][*]Make the necessary changes to correct any problems (listed below) that resulted in your modification being denied.
[*]Test your MOD, the XML file and the installation of it.
[*]Re-upload your MOD to our modifications database.[/list]
Please ensure you tested your modification on the latest version of phpBB (see the [url=http://www.phpbb.com/downloads/]Downloads[/url] page) before you re-submit your modification.

If you feel this denial was not warranted please contact the MOD Validation Leader.

Here is a report on why your modification was denied:
[quote]%s[/quote]

Please refer to the following links before you reupload your modification:
[list]
[*][url=http://www.phpbb.com/mods/modx/]phpBB MODX standard[/url]
[*][b]Securing MODs:[/b]
[url=http://blog.phpbb.com/2009/02/12/injection-vulnerabilities/]Injection Vulnerability Prevention[/url]
[url=http://blog.phpbb.com/2009/09/10/how-not-to-use-request_var/]How (not) to use request_var[/url]
[/list]

Para saber mais, leia o seguinte:
[list][*][url=http://www.phpbb.com/mods/faq/]MODifications FAQ[/url]
[*][url=http://www.phpbb.com/kb/3.0/modifications/]phpBB3 MODifications Category in Knowledge Base[/url][/list]

Para ajuda com a criação de modificações, leia o seguinte:
[list][*][url=http://www.phpbb.com/community/viewforum.php?f=71]Forum for MOD Authors\Help[/url]
[*]IRC Support - [url=irc://irc.freenode.net/phpBB-coding]#phpBB-coding[/url] is registered on the FreeNode IRC network ([url=irc://irc.freenode.net/]irc.freenode.net[/url])[/list]

[b]If you wish to discuss anything in this PM please send a message using the discusion tab in the MOD database, My Modifications, manage for this MOD.[/b] If you feel this denial was not warranted please contact the MOD Validation Leader.

Obrigado,
A Equipa de Modificações',
));
