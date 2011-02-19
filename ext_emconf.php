<?php

########################################################################
# Extension Manager/Repository config file for ext "bb_chgallery_download".
#
# Auto generated 19-02-2011 13:03
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'ChGallery Downloader',
	'description' => 'Allows you to download a complete album as Zip.',
	'category' => 'plugin',
	'author' => 'Bastian Bringenberg',
	'author_email' => 'spam@bastian-bringenberg.de',
	'shy' => '',
	'dependencies' => 'chgallery',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'chgallery' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:8:{s:9:"ChangeLog";s:4:"0d6f";s:10:"README.txt";s:4:"ee2d";s:34:"class.tx_bb_chgallery_download.php";s:4:"1f09";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"b4a4";s:24:"ext_typoscript_setup.txt";s:4:"bb92";s:19:"doc/wizard_form.dat";s:4:"3657";s:20:"doc/wizard_form.html";s:4:"107a";}',
	'suggests' => array(
	),
);

?>