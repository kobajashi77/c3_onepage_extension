<?php
/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['onepage'] = array(
	tables =>array('tl_onepage'),
	icon=> 'sytem/modules/onepage/assets/icon.png'
	);

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['onepage'] = array(
	'onepage_list'	=>'ModuleOnepageList'
	);
/**
 * Front end modules
 */
$GLOBALS['TL_CTE']['onepage'] = array(
	'onepage_viewer'	=>'ContentOnePageViewer'
	);