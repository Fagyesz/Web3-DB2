<?php
/**
 * Pets
 * 
 * parent: application/core/MY_Controller.php
 */
class Pets extends MY_Controller {
	public function __construct() {
		parent::__construct();

		$this->name = 'pets';
		$this->model = 'Pet';
		$this->load->model($this->model);
	}
}