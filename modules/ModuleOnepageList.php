<?
class ModuleOnepageList extends Module
{
	protected $strTemplate = 'mod_onepage_list';

	protected function compile()
	{

		$rs = Database::getInstance()
			->prepare('SELECT onepageId FROM tl_onepage')
			->execute()->fetchRow();
			$this->Template->onepageId = deserialize($rs[0]);
	}
}