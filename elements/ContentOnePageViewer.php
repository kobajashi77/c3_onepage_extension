<?php

Class ContentOnePageViewer extends ContentElement {
protected $strTemplate = 'ce_onepage_viewer';

protected function compile(){
$objOnePage = Database::getInstance()
			->prepare('SELECT onepageId FROM tl_onepage Where title=?')
			->execute($this->onepagemodule)->fetchRow();
			$this->Template->onepageId = deserialize($objOnePage[0]);
}




}