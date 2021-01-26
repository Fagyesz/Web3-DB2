<?php
/**
 * Users Controller
 
 * parent: application/core/MY_Controller.php
 */
class Users extends MY_Controller {
	public function __construct() {
		parent::__construct();

		$this->name = 'users';
		$this->model = 'User';
		$this->load->model($this->model);
	}

	// ***********************************************
	
	public function edit($id) {
		
		$this->row_id = $id;
		parent::edit($id);
	}

	// ***********************************************

	public function password_current($str) {
var_dump($this->input->post('password'));
		if (
			$this->input->post('password') == '' &&
			$str == '') {
				return true;
		}
		$row = $this->{$this->model}->get_where($this->row_id);
		return (md5($str) === $row->password) ? true : false;
	}
}
