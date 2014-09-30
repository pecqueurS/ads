<?php

namespace ads\Services\Mails\Tpl;

use Bundles\Parametres\Conf;
use Bundles\Templates\ExtentionsTwig\FormExtTwig;

use Bundles\Templates\Tpl;

/**
* 
*/
class MailsTpl extends Tpl {
	
	public static function display($vars = array(), $tpl = null) {
		$tplObj = new Tpl('/App/'.Conf::getAppName() . '/Services/Mails/Tpl/Matrices');
		return $tplObj->addVars($vars)->getTpl($tpl);
	}

	

}







?>