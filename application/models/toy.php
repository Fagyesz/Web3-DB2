<?php
/**
 * Toy 
 * parent: application/core/MY_Model.php
 */
class Toy extends MY_Model {
	// ***********************************************
	
	public function __construct() {
		parent::__construct();

		
		$this->table = 'toys';

		//(id, created, modified)
		$this->fields = array('toyid','name', 'color');
	}
}
