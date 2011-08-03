<?php

/**
*
* @package - Add a group to the team page & legend repositioning
* @version $Id$
* @copyright (c) Prosk8er ( http://www.gotskillslounge.com/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
if (!isset($phpbb_root_path) && defined('IN_ADMIN'))
{
	$phpbb_root_path = '../';
}
else if (!isset($phpbb_root_path))
{
	$phpbb_root_path = './';
}

$lang = array_merge($lang, array(
	'ADD_GROUP_TEAMPAGE'				=> 'Add a group to the team page.',
	'ADD_GROUP_TEAMPAGE_TITLE'					=> 'Add a group to the team page.',
	'ATP_INSTALLED'				=> 'Installed "Add a group to the team page." MOD v%s',

	'INSTALL_ATP_MOD'			=> 'Install "Add a group to the team page." MOD',
	'INSTALL_ATP_MOD_CONFIRM'	=> 'Are you sure you want to install the "Add a group to the team page." MOD?',
	'UPDATE_ATP_MOD'			=> 'Update "Add a group to the team page." MOD',
	'UPDATE_ATP_MOD_CONFIRM'	=> 'Are you sure you want to update the "Add a group to the team page." MOD?',
	'UNINSTALL_ATP_MOD'			=> 'Uninstall "Add a group to the team page." MOD',
	'UNINSTALL_ATP_MOD_CONFIRM'	=> 'Are you sure you want to uninstall the "Add a group to the team page." MOD?',
));

?>