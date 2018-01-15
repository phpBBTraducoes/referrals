<?php
/**
*
* @package phpBB Extension - Referrals
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.4] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
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
	'UCP_REFERRAL'			=> 'Referências',
	'UCP_STATISTICS'	 	=> 'Ver estatísticas',
	'UCP_REFERRALS'			=> 'Ver referências',
	'UCP_INVITE'		 	=> 'Convidar amigos',
	'REFERRAL_LINK'			=> 'Seu link de referência',
	'YOUR_STATISTICS'		=> 'Suas estatísticas',
	'MEMBERS_REFERRED'		=> 'Membros indicados',
	'INVITATIONS_SENT'		=> 'Convites enviados',
	'CONTESTS_WON'			=> 'Concursos ganhos',
	'RECIPIENTS'		 	=> 'Destinatário(s)',
	'RECIPIENTS_EXPLAIN' 	=> 'Você pode enviar um convite para vários destinatários digitando cada endereço de e-mail em uma nova linha.',
	'SENDER_EMAIL'			=> 'Seu email',
	'MESSAGE_EXPLAIN'		=> 'Seu link de referência será inserido automaticamente no final da sua mensagem.',
	'INVITATION_SENT'		=> 'Seu convite foi enviado com sucesso!',
	'FORM_ERROR'		 	=> 'Você deve preencher todos os campos.',
	'YOUR_REFERRALS'	 	=> 'Suas referências',
	'NO_REFERRALS'			=> 'Você ainda não possui referências.',
));
