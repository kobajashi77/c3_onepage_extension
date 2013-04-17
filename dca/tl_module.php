<?php
//Anzeige im Backend
$GLOBALS['TL_DCA']['tl_module']['palettes']['onepage_list'] = '{title_legend},name,headline,type;{onepagemodule_legend},onepagemodule;{template_legend:hide},onepage_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
		
$GLOBALS['TL_DCA']['tl_module']['fields']['onepagemodule'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['onepage'],
			'inputType'               => 'select', 
			'options_callback'       	=> array('DataContainerOnePage', 'getOnePageModules'), 
             'eval'                    => array('mandatory'=>true),
       		'sql'                     => "varchar(255) NOT NULL default ''"
		);
$GLOBALS['TL_DCA']['tl_module']['fields']['onepage_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['onepage_template'],
	'default'                 => 'onepage_list',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_onepage', 'getOnepageTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);
class tl_module_onepage extends Backend
{

	/**
	 * Import the back end user object
	 */
	
	public function getOnepageTemplates()
	{
		return $this->getTemplateGroup('mod_onepage');
	}
}



