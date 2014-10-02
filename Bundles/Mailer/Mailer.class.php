<?php

namespace ads\Bundles\Mailer;

use ads\Services\Mails\Mails;
/**
* 
*/
class Mailer {

	private $destinataire;
	private $name;
	private $message;
	
	public static function send($destinataire, $name, $message) {
		return false;
		$mailer = new Mailer($destinataire, $name, $message);
		$isSaveInDb = $mailer->saveToDb();
		$isSaveInDb = $mailer->sendMail();
	}

	public function __construct($destinataire, $name, $message) {
		$this->destinataire = $destinataire;
		$this->name =  $name;
		$this->message = $message;
	}

	public function saveToDb() {

	}

	public function sendMail() {
		/*ENVOI D'EMAIL*/
			$destinataire = $result[0]["jou_email"];
			$sujet = 'Modification du mot de passe sur "'.Conf::$server['name'].'"';
			$message = array($response, 'forgotPwd');
			$headers = array(Conf::$server['name'], Conf::$emails['webmaster'][0]);

			if (Mails::init('html')->sendMail($destinataire,$sujet,$message,$headers) === TRUE && $result2){
				return TRUE;
			}else {
				return FALSE;
			}
	}

}



?>