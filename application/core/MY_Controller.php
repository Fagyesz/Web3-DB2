<?php

class MY_Controller extends CI_Controller {
	protected $name = null; 
	protected $model = null; 
	protected $data = null; 

	// ***********************************************
	
	public function __construct() {
		parent::__construct();

		
		$this->load->library('session');
		$this->lang->load('common');
		$this->load->helper(array('url', 'html', 'form', 'language', 'my_nav'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
	}

	// ***********************************************
	
	protected function _loadView($action) {
		$this->data['controller'] = $this->name;
		$this->data['action'] = $action;
		$this->load->view('layouts/header', $this->data);
		$this->load->view($this->name.'/'.$action, $this->data);
		$this->load->view('layouts/footer', $this->data);
	}

	// ***********************************************
	 
	public function index() {
		$this->data['rows'] = $this->{$this->model}->get();
		$this->_loadView(__FUNCTION__);
	}

	// ***********************************************
	 
	public function view($id) {
		$this->data['row'] = $this->{$this->model}->get_where($id);
		$this->_loadView(__FUNCTION__);
	}

	// ***********************************************
	
	public function insert() {
		$action = __FUNCTION__;
		// POST 
		if ($this->input->post()) {
			//  /application/config/form_validation.php
			if ($this->form_validation->run("{$this->name}_{$action}")) {
				if ($this->{$this->model}->insert()) {
					$this->session->set_userdata('msg', array('success', lang('crud_inserted')));
				} else {
					$this->session->set_userdata('msg', array('danger', lang('crud_error')));
				}
				redirect("{$this->name}/index", 'refresh');
			}
		}
		// 
		$this->_loadView($action);
	}

	// ***********************************************
	// 
	public function edit($id) {
		$action = __FUNCTION__;
		// POST
		if ($this->input->post()) {
			//  /application/config/form_validation.php
			if ($this->form_validation->run("{$this->name}_{$action}")) {
				if ($this->{$this->model}->update($id)) {
					$this->session->set_userdata('msg', array('success', lang('crud_updated')));
				} else {
					$this->session->set_userdata('msg', array('danger', lang('crud_error')));
				}
				redirect("{$this->name}/view/{$id}", 'refresh');
			}
		}
		// 
		$this->data['row'] = $this->{$this->model}->get_where($id);
		$this->_loadView($action);
	}

	// ***********************************************
	// 
	public function delete($id) {
		$result = $this->{$this->model}->delete($id);
		$this->session->set_userdata('msg', array('warning', lang('crud_deleted')));
		redirect("{$this->name}/index", 'refresh');
	}
}
