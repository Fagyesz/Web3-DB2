<?php
/**
 * Pet
 * parent: application/core/MY_Model.php
 */
class Pet extends MY_Model {
	// ***********************************************
	
	public function __construct() {
		parent::__construct();

		
		$this->table = 'pets';

		//(id, created, modified)
		$this->fields = array('name', 'type', 'sex','toyid','ownerid');
	}
}
