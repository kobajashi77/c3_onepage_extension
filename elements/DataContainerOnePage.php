<?php
class DataContainerOnePage {
public function getOnePageModules(){
	$objOnePageModules = Database::getInstance()
		->prepare('SELECT title, onepageId FROM tl_onepage')
		->execute();
		$arrOnePageModules = array();
			while($objOnePageModules->next()){
				$arrOnePageModules[$objOnePageModules->title] = $objOnePageModules->title;
	}
return $arrOnePageModules;
}
}