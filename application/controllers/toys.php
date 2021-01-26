<?php
/**
 * Tox
 * 
 * parent: application/core/MY_Controller.php
 */
class Toys extends MY_Controller {
	public function __construct() {
		parent::__construct();

		$this->name = 'toys';
		$this->model = 'Toy';
		$this->load->model($this->model);
	}
}