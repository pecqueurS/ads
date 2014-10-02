<?php

namespace ads\Controllers;

use Bundles\Formulaires\Forms;
use ads\Bundles\Mailer\Mailer;
/**
* 
*/
class Contact {
	
	public function show() {
		$response = array();

		$response['isMailSent'] = false;
		$forgotPwdForm = Forms::make('Contact');
		if(!$forgotPwdForm->isValid()) {
			$response['formContact'] = $forgotPwdForm->render();
		} else {
			$response['isMailSent'] = send($destinataire, $name, $message);
		}
	
		return $response;
	}

}



?>