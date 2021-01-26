<?php
/**
 * Entry 
 * parent: application/core/MY_Model.php
 */
class Entry extends MY_Model {
	// ***********************************************
	
	public function __construct() {
		parent::__construct();

		
		$this->table = 'entries';

		//(id, created, modified)
		$this->fields = array('name', 'body');
	}
}
