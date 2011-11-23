<?php
/* Aco Fixture generated on: 2010-05-20 22:05:26 : 1274393786 */
class AcoFixture extends CakeTestFixture {
	var $name = 'Aco';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'model' => array('type' => 'string', 'null' => true),
		'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'alias' => array('type' => 'string', 'null' => true),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '1',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/view',
			'lft' => '1',
			'rght' => '2'
		),
		array(
			'id' => '2',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/index',
			'lft' => '3',
			'rght' => '4'
		),
		array(
			'id' => '3',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Attachments/admin_index',
			'lft' => '5',
			'rght' => '6'
		),
		array(
			'id' => '4',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Attachments/admin_add',
			'lft' => '7',
			'rght' => '8'
		),
		array(
			'id' => '5',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Attachments/admin_edit',
			'lft' => '9',
			'rght' => '10'
		),
		array(
			'id' => '6',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Attachments/admin_delete',
			'lft' => '11',
			'rght' => '12'
		),
		array(
			'id' => '7',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Attachments/admin_browse',
			'lft' => '13',
			'rght' => '14'
		),
		array(
			'id' => '8',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Blocks/admin_index',
			'lft' => '15',
			'rght' => '16'
		),
		array(
			'id' => '9',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Blocks/admin_add',
			'lft' => '17',
			'rght' => '18'
		),
		array(
			'id' => '10',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Blocks/admin_edit',
			'lft' => '19',
			'rght' => '20'
		),
		array(
			'id' => '11',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Blocks/admin_delete',
			'lft' => '21',
			'rght' => '22'
		),
		array(
			'id' => '12',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Blocks/admin_moveup',
			'lft' => '23',
			'rght' => '24'
		),
		array(
			'id' => '13',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Blocks/admin_movedown',
			'lft' => '25',
			'rght' => '26'
		),
		array(
			'id' => '14',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Blocks/admin_process',
			'lft' => '27',
			'rght' => '28'
		),
		array(
			'id' => '15',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Comments/admin_index',
			'lft' => '29',
			'rght' => '30'
		),
		array(
			'id' => '16',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Comments/admin_edit',
			'lft' => '31',
			'rght' => '32'
		),
		array(
			'id' => '17',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Comments/admin_delete',
			'lft' => '33',
			'rght' => '34'
		),
		array(
			'id' => '18',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Comments/admin_process',
			'lft' => '35',
			'rght' => '36'
		),
		array(
			'id' => '19',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Comments/index',
			'lft' => '37',
			'rght' => '38'
		),
		array(
			'id' => '20',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Comments/add',
			'lft' => '39',
			'rght' => '40'
		),
		array(
			'id' => '21',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Comments/delete',
			'lft' => '41',
			'rght' => '42'
		),
		array(
			'id' => '22',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Contacts/admin_index',
			'lft' => '43',
			'rght' => '44'
		),
		array(
			'id' => '23',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Contacts/admin_add',
			'lft' => '45',
			'rght' => '46'
		),
		array(
			'id' => '24',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Contacts/admin_edit',
			'lft' => '47',
			'rght' => '48'
		),
		array(
			'id' => '25',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Contacts/admin_delete',
			'lft' => '49',
			'rght' => '50'
		),
		array(
			'id' => '26',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Contacts/view',
			'lft' => '51',
			'rght' => '52'
		),
		array(
			'id' => '27',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Filemanager/admin_index',
			'lft' => '53',
			'rght' => '54'
		),
		array(
			'id' => '28',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Filemanager/admin_browse',
			'lft' => '55',
			'rght' => '56'
		),
		array(
			'id' => '29',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Filemanager/admin_editfile',
			'lft' => '57',
			'rght' => '58'
		),
		array(
			'id' => '30',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Filemanager/admin_upload',
			'lft' => '59',
			'rght' => '60'
		),
		array(
			'id' => '31',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Filemanager/admin_delete_file',
			'lft' => '61',
			'rght' => '62'
		),
		array(
			'id' => '32',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Filemanager/admin_delete_directory',
			'lft' => '63',
			'rght' => '64'
		),
		array(
			'id' => '33',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Filemanager/admin_rename',
			'lft' => '65',
			'rght' => '66'
		),
		array(
			'id' => '34',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Filemanager/admin_create_directory',
			'lft' => '67',
			'rght' => '68'
		),
		array(
			'id' => '35',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Filemanager/admin_create_file',
			'lft' => '69',
			'rght' => '70'
		),
		array(
			'id' => '36',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Filemanager/admin_chmod',
			'lft' => '71',
			'rght' => '72'
		),
		array(
			'id' => '37',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Languages/admin_index',
			'lft' => '73',
			'rght' => '74'
		),
		array(
			'id' => '38',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Languages/admin_add',
			'lft' => '75',
			'rght' => '76'
		),
		array(
			'id' => '39',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Languages/admin_edit',
			'lft' => '77',
			'rght' => '78'
		),
		array(
			'id' => '40',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Languages/admin_delete',
			'lft' => '79',
			'rght' => '80'
		),
		array(
			'id' => '41',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Languages/admin_moveup',
			'lft' => '81',
			'rght' => '82'
		),
		array(
			'id' => '42',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Languages/admin_movedown',
			'lft' => '83',
			'rght' => '84'
		),
		array(
			'id' => '43',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Languages/admin_select',
			'lft' => '85',
			'rght' => '86'
		),
		array(
			'id' => '44',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Links/admin_index',
			'lft' => '87',
			'rght' => '88'
		),
		array(
			'id' => '45',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Links/admin_add',
			'lft' => '89',
			'rght' => '90'
		),
		array(
			'id' => '46',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Links/admin_edit',
			'lft' => '91',
			'rght' => '92'
		),
		array(
			'id' => '47',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Links/admin_delete',
			'lft' => '93',
			'rght' => '94'
		),
		array(
			'id' => '48',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Links/admin_moveup',
			'lft' => '95',
			'rght' => '96'
		),
		array(
			'id' => '49',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Links/admin_movedown',
			'lft' => '97',
			'rght' => '98'
		),
		array(
			'id' => '50',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Links/admin_process',
			'lft' => '99',
			'rght' => '100'
		),
		array(
			'id' => '51',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Menus/admin_index',
			'lft' => '101',
			'rght' => '102'
		),
		array(
			'id' => '52',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Menus/admin_add',
			'lft' => '103',
			'rght' => '104'
		),
		array(
			'id' => '53',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Menus/admin_edit',
			'lft' => '105',
			'rght' => '106'
		),
		array(
			'id' => '54',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Menus/admin_delete',
			'lft' => '107',
			'rght' => '108'
		),
		array(
			'id' => '55',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Messages/admin_index',
			'lft' => '109',
			'rght' => '110'
		),
		array(
			'id' => '56',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Messages/admin_edit',
			'lft' => '111',
			'rght' => '112'
		),
		array(
			'id' => '57',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Messages/admin_delete',
			'lft' => '113',
			'rght' => '114'
		),
		array(
			'id' => '58',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Messages/admin_process',
			'lft' => '115',
			'rght' => '116'
		),
		array(
			'id' => '59',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/admin_index',
			'lft' => '117',
			'rght' => '118'
		),
		array(
			'id' => '60',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/admin_create',
			'lft' => '119',
			'rght' => '120'
		),
		array(
			'id' => '61',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/admin_add',
			'lft' => '121',
			'rght' => '122'
		),
		array(
			'id' => '62',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/admin_edit',
			'lft' => '123',
			'rght' => '124'
		),
		array(
			'id' => '63',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/admin_update_paths',
			'lft' => '125',
			'rght' => '126'
		),
		array(
			'id' => '64',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/admin_delete',
			'lft' => '127',
			'rght' => '128'
		),
		array(
			'id' => '65',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/admin_delete_meta',
			'lft' => '129',
			'rght' => '130'
		),
		array(
			'id' => '66',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/admin_add_meta',
			'lft' => '131',
			'rght' => '132'
		),
		array(
			'id' => '67',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/admin_process',
			'lft' => '133',
			'rght' => '134'
		),
		array(
			'id' => '68',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/term',
			'lft' => '135',
			'rght' => '136'
		),
		array(
			'id' => '69',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/promoted',
			'lft' => '137',
			'rght' => '138'
		),
		array(
			'id' => '70',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Nodes/search',
			'lft' => '139',
			'rght' => '140'
		),
		array(
			'id' => '71',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Regions/admin_index',
			'lft' => '141',
			'rght' => '142'
		),
		array(
			'id' => '72',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Regions/admin_add',
			'lft' => '143',
			'rght' => '144'
		),
		array(
			'id' => '73',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Regions/admin_edit',
			'lft' => '145',
			'rght' => '146'
		),
		array(
			'id' => '74',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Regions/admin_delete',
			'lft' => '147',
			'rght' => '148'
		),
		array(
			'id' => '75',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Roles/admin_index',
			'lft' => '149',
			'rght' => '150'
		),
		array(
			'id' => '76',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Roles/admin_add',
			'lft' => '151',
			'rght' => '152'
		),
		array(
			'id' => '77',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Roles/admin_edit',
			'lft' => '153',
			'rght' => '154'
		),
		array(
			'id' => '78',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Roles/admin_delete',
			'lft' => '155',
			'rght' => '156'
		),
		array(
			'id' => '79',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Settings/admin_dashboard',
			'lft' => '157',
			'rght' => '158'
		),
		array(
			'id' => '80',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Settings/admin_index',
			'lft' => '159',
			'rght' => '160'
		),
		array(
			'id' => '81',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Settings/admin_view',
			'lft' => '161',
			'rght' => '162'
		),
		array(
			'id' => '82',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Settings/admin_add',
			'lft' => '163',
			'rght' => '164'
		),
		array(
			'id' => '83',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Settings/admin_edit',
			'lft' => '165',
			'rght' => '166'
		),
		array(
			'id' => '84',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Settings/admin_delete',
			'lft' => '167',
			'rght' => '168'
		),
		array(
			'id' => '85',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Settings/admin_prefix',
			'lft' => '169',
			'rght' => '170'
		),
		array(
			'id' => '86',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Settings/admin_moveup',
			'lft' => '171',
			'rght' => '172'
		),
		array(
			'id' => '87',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Settings/admin_movedown',
			'lft' => '173',
			'rght' => '174'
		),
		array(
			'id' => '88',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Terms/admin_index',
			'lft' => '175',
			'rght' => '176'
		),
		array(
			'id' => '89',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Terms/admin_add',
			'lft' => '177',
			'rght' => '178'
		),
		array(
			'id' => '90',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Terms/admin_edit',
			'lft' => '179',
			'rght' => '180'
		),
		array(
			'id' => '91',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Terms/admin_delete',
			'lft' => '181',
			'rght' => '182'
		),
		array(
			'id' => '92',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Terms/admin_moveup',
			'lft' => '183',
			'rght' => '184'
		),
		array(
			'id' => '93',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Terms/admin_movedown',
			'lft' => '185',
			'rght' => '186'
		),
		array(
			'id' => '94',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Types/admin_index',
			'lft' => '187',
			'rght' => '188'
		),
		array(
			'id' => '95',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Types/admin_add',
			'lft' => '189',
			'rght' => '190'
		),
		array(
			'id' => '96',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Types/admin_edit',
			'lft' => '191',
			'rght' => '192'
		),
		array(
			'id' => '97',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Types/admin_delete',
			'lft' => '193',
			'rght' => '194'
		),
		array(
			'id' => '98',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/admin_index',
			'lft' => '195',
			'rght' => '196'
		),
		array(
			'id' => '99',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/admin_add',
			'lft' => '197',
			'rght' => '198'
		),
		array(
			'id' => '100',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/admin_edit',
			'lft' => '199',
			'rght' => '200'
		),
		array(
			'id' => '101',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/admin_reset_password',
			'lft' => '201',
			'rght' => '202'
		),
		array(
			'id' => '102',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/admin_delete',
			'lft' => '203',
			'rght' => '204'
		),
		array(
			'id' => '103',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/admin_login',
			'lft' => '205',
			'rght' => '206'
		),
		array(
			'id' => '104',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/admin_logout',
			'lft' => '207',
			'rght' => '208'
		),
		array(
			'id' => '105',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/index',
			'lft' => '209',
			'rght' => '210'
		),
		array(
			'id' => '106',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/add',
			'lft' => '211',
			'rght' => '212'
		),
		array(
			'id' => '107',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/activate',
			'lft' => '213',
			'rght' => '214'
		),
		array(
			'id' => '108',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/edit',
			'lft' => '215',
			'rght' => '216'
		),
		array(
			'id' => '109',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/forgot',
			'lft' => '217',
			'rght' => '218'
		),
		array(
			'id' => '110',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/reset',
			'lft' => '219',
			'rght' => '220'
		),
		array(
			'id' => '111',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/login',
			'lft' => '221',
			'rght' => '222'
		),
		array(
			'id' => '112',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/logout',
			'lft' => '223',
			'rght' => '224'
		),
		array(
			'id' => '113',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Users/view',
			'lft' => '225',
			'rght' => '226'
		),
		array(
			'id' => '114',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Vocabularies/admin_index',
			'lft' => '227',
			'rght' => '228'
		),
		array(
			'id' => '115',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Vocabularies/admin_add',
			'lft' => '229',
			'rght' => '230'
		),
		array(
			'id' => '116',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Vocabularies/admin_edit',
			'lft' => '231',
			'rght' => '232'
		),
		array(
			'id' => '117',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Vocabularies/admin_delete',
			'lft' => '233',
			'rght' => '234'
		),
		array(
			'id' => '118',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Vocabularies/admin_moveup',
			'lft' => '235',
			'rght' => '236'
		),
		array(
			'id' => '119',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/Vocabularies/admin_movedown',
			'lft' => '237',
			'rght' => '238'
		),
		array(
			'id' => '120',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/AclActions/admin_index',
			'lft' => '239',
			'rght' => '240'
		),
		array(
			'id' => '121',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/AclActions/admin_add',
			'lft' => '241',
			'rght' => '242'
		),
		array(
			'id' => '122',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/AclActions/admin_edit',
			'lft' => '243',
			'rght' => '244'
		),
		array(
			'id' => '123',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/AclActions/admin_delete',
			'lft' => '245',
			'rght' => '246'
		),
		array(
			'id' => '124',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/AclActions/admin_move',
			'lft' => '247',
			'rght' => '248'
		),
		array(
			'id' => '125',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/AclActions/admin_generate',
			'lft' => '249',
			'rght' => '250'
		),
		array(
			'id' => '126',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/AclPermissions/admin_index',
			'lft' => '251',
			'rght' => '252'
		),
		array(
			'id' => '127',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/AclPermissions/admin_toggle',
			'lft' => '253',
			'rght' => '254'
		),
		array(
			'id' => '132',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsLocales/admin_index',
			'lft' => '259',
			'rght' => '260'
		),
		array(
			'id' => '133',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsLocales/admin_activate',
			'lft' => '261',
			'rght' => '262'
		),
		array(
			'id' => '134',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsLocales/admin_add',
			'lft' => '263',
			'rght' => '264'
		),
		array(
			'id' => '135',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsLocales/admin_edit',
			'lft' => '265',
			'rght' => '266'
		),
		array(
			'id' => '136',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsLocales/admin_delete',
			'lft' => '267',
			'rght' => '268'
		),
		array(
			'id' => '137',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsPlugins/admin_index',
			'lft' => '269',
			'rght' => '270'
		),
		array(
			'id' => '138',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsPlugins/admin_add',
			'lft' => '271',
			'rght' => '272'
		),
		array(
			'id' => '139',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsPlugins/admin_delete',
			'lft' => '273',
			'rght' => '274'
		),
		array(
			'id' => '140',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsPlugins/admin_toggle',
			'lft' => '275',
			'rght' => '276'
		),
		array(
			'id' => '141',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsThemes/admin_index',
			'lft' => '277',
			'rght' => '278'
		),
		array(
			'id' => '142',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsThemes/admin_activate',
			'lft' => '279',
			'rght' => '280'
		),
		array(
			'id' => '143',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsThemes/admin_add',
			'lft' => '281',
			'rght' => '282'
		),
		array(
			'id' => '144',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsThemes/admin_editor',
			'lft' => '283',
			'rght' => '284'
		),
		array(
			'id' => '145',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsThemes/admin_save',
			'lft' => '285',
			'rght' => '286'
		),
		array(
			'id' => '146',
			'parent_id' => '',
			'model' => '',
			'foreign_key' => '',
			'alias' => 'controllers/ExtensionsThemes/admin_delete',
			'lft' => '287',
			'rght' => '288'
		),
	);
}
?>