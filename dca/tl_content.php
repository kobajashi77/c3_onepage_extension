<?php
//Anzeige im Backend
$GLOBALS['TL_DCA']['tl_content']['palettes']['onepage_viewer'] = '{type_legend},type,headline;{onepagemodule_legend},onepagemodule;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
		
$GLOBALS['TL_DCA']['tl_content']['fields']['onepagemodule'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['onepagemodule'],
			'inputType'               => 'select', 
			'options_callback'       	=> array('DataContainerOnePage', 'getOnePageModules'), 
             'eval'                    => array('mandatory'=>true),
       			'sql'                     => "varchar(255) NOT NULL default ''"
		);