<?php

namespace ads\Controllers;

use Bundles\Formulaires\Forms;
/**
* 
*/
class Contact {
	
	public function show() {
		$response = array();

		$forgotPwdForm = Forms::make('Contact');
		if(!$forgotPwdForm->isValid()) {
			$response['formContact'] = $forgotPwdForm->render();
		} else {
			var_dump('test');
		}
	
		return $response;
	}

}



?>