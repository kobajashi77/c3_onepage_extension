<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Onepage
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'DataContainerOnePage' => 'system/modules/onepage/elements/DataContainerOnePage.php',
 'ContentOnePageViewer' => 'system/modules/onePage/elements/ContentOnePageViewer.php',
	// Modules
	'ModuleOnepageList'    => 'system/modules/onepage/modules/ModuleOnepageList.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_onepage_viewer' => 'system/modules/onepage/templates',
	'mod_onepage_list'  => 'system/modules/onepage/templates',
));
