<?php


namespace ads\Models;

use Bundles\Bdd\Db;
use Bundles\Bdd\Model;

use ads\Services\Timer\Timer;


class ConnectesModel extends Model {

	protected $tableName = "connectes";
	
	public function __construct() {
		parent::__construct();
	}

	public static function init() {
		$mod = new ConnectesModel();
		return $mod;
	}

	public function insert($idPlayer) {
		$this->table = $this->db->addRule('con_joueurs_id', $idPlayer)
								->select();
		if(empty($this->table)) {
			$values = array( NULL, $idPlayer, Timer::currentTimestamp());
			$return = $this->db->insert($values);
		} else {
			$return = true;
		}

		
		return $return;
	}

}


?>