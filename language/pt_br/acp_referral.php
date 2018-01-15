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
	'ACP_MOD_VERSION'					=> 'Versão',
	'GENERAL_CONFIG'					=> 'Configurações Gerais',
	'DISPLAY_TOP_FIVE_REFERRERS'		=> 'Exibir top 5 referências no índice do fórum',
	'DISPLAY_USER_REFERRALS_VIEWTOPIC'	=> 'Exibir a quantidade referências dos usuários no viewtopic',
	'DISPLAY_USER_REFERRALS_PROFILE'	=> 'Exibir a quantidade referências dos usuários no perfil',
	'DISPLAY_REFERRAL_CONTESTS'			=> 'Exibir concursos de referência no índice do fórum',
	'CONTEST_ADD'						=> 'Adicionar concurso',
	'CONTEST_NAME'					 	=> 'Nome do concurso',
	'CONTEST_DESCRIPTION'				=> 'Descrição',
	'REFERRAL_MINIMUM_POSTS'			=> 'Posts mínimos de referência',
	'REFERRAL_MINIMUM_POSTS_EXPLAIN'	=> 'Defina os posts mínimos que um referente precisa ter para contar como uma referência válida.',
	'CONTEST_DURATION'				 	=> 'Duração',
	'DAYS'							 	=> 'Dias',
	'WEEKS'								=> 'Semanas',
	'MONTHS'							=> 'Mêses',
	'CONTEST_START_DATE'				=> 'Data inicial',
	'CONTEST_END_DATE'				 	=> 'Data final',
	'CONTEST_STATUS'					=> 'Status',
	'CONTEST_IN_PROGRESS'				=> 'Em progresso',
	'CONTEST_OVER'					 	=> 'Acima',
	'LIST_CONTEST'					 	=> 'Concurso',
	'LIST_CONTESTS'						=> 'Concursos',
	'NO_CONTESTS'						=> 'Nenhum concurso encontrado.',
	'ENTER_CONTEST_NAME'				=> 'Você precisa especificar um nome para o concurso.',
	'CONTEST_INFO_UPDATED'			 	=> 'O Concurso foi atualizado com sucesso.',
	'CONTEST_ADDED'						=> 'O Concurso foi criado com sucesso.',
	'CONTEST_DELETED'					=> 'O Concurso foi deletado com sucesso.',
	'VIEW_STATISTICS'					=> 'Ver estatísticas',
	'CONTEST_POS'						=> 'Pos',
	'REFERRER_USERNAME'					=> 'Nome de usuário do referente',
	'REFERRAL_USERNAME'					=> 'Nome de usuário da referência',
	'CONTEST_TOTAL_REFERRALS'			=> 'Membros totais referidos durante este concurso',
	'NO_STATS'						 	=> 'Não há estatísticas disponíveis para este concurso.',
	'SEARCH_REFERRER'					=> 'Procure um referente',
	'REFERRALS'							=> 'Referências',
	'LIST_REFERRER'						=> 'Referente',
	'LIST_REFERRERS'					=> 'Referentes',
	'VIEW_REFERRALS'					=> 'Ver referências',
	'REFERRER'						 	=> 'Referente',
	'REFERRED_ON'						=> 'Referido em',
	'REFERRER_NOT_FOUND'				=> 'O referente que você está procurando não foi encontrado.',
	'NO_REFERRERS'					 	=> 'Ainda não há referentes.',
));
