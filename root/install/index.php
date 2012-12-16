<?php
/**
*
* @package - Add a group to the team page & legend repositioning
* @version $Id$
* @copyright (c) Prosk8er ( http://www.gotskillslounge.com/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
define('IN_INSTALL', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
if (!class_exists('phpbb_group_positions'))
{
	include($phpbb_root_path . 'includes/group_positions.' . $phpEx);
}

$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$mod_name = 'ADD_GROUP_TEAMPAGE';

$version_config_name = 'add_group_teampage_mod_version';
$language_file = 'mods/info_acp_atp_install';

$versions = array(
	// Version 0.1.0-RC1
	'0.1.0-RC1'	=> array(
		'config_add' => array(
			array('legend_sort_groupname', 0),
			array('teampage_multiple', 1),
			array('teampage_forums', 1),
		),

		'table_column_add' => array(
			array('phpbb_groups', 'group_teampage', array('UINT', 0)),
		),

		'table_column_update' => array(
			array('phpbb_groups', 'group_legend', array('UINT', 0)),
		),

		'table_row_update' => array(
			array('phpbb_groups', array('group_id'  => '5'), array('group_legend'  => '1', 'group_teampage' => '1')),
			array('phpbb_groups', array('group_id'  => '4'), array('group_legend'  => '2', 'group_teampage' => '2')),
		),

		'module_add' => array(
			array('acp', 'ACP_GROUPS', 'ACP_GROUPS_POSITION'),

			array('acp', 'ACP_GROUPS_POSITION', array(
					'module_basename'	=> 'groups',
					'module_langname'	=> 'ACP_GROUPS_POSITION',
					'module_mode'		=> 'position',
					'module_auth'		=> 'acl_a_group',
				),
			),
		),
	),

	// Version 0.2.0-RC1
	'0.2.0-RC1'	=> array(
		'config_remove' => array(
			array('teampage_multiple'),
		),

		'config_add' => array(
			array('teampage_memberships', 1),
		),
	),

	// Version 0.2.1-RC1
	'0.2.1-RC1'	=> array(
	),
	// Version 0.2.2-RC1
	'0.2.2-RC1'	=> array(
		'cache_purge' => array('', 'imageset', 'template', 'theme'),
	),
);

// Include the UMIL Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>
