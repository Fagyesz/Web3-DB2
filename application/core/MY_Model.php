<?php
/**
 * 
 *
 */
class MY_Model extends CI_Model {
	protected $table = null; // 
	protected $fields = null; // 
	protected $date_format = 'Y-m-d h:i:s';

	// ***********************************************
	// 
	function __construct() {
		parent::__construct();

		$this->load->database('default');
		$this->load->helper('language');
	}

	// ***********************************************
	// 
	public function get() {
		$query = $this->db->get($this->table);
		return $query->result();
	}

	// ***********************************************
	// 
	public function get_where($id) {
		$query = $this->db->get_where($this->table, array('id' => $id));
		$rows = $query->result();

		// 
		return $rows[0];
	}

	// ***********************************************
	// 
	public function insert() {
		// 
		$date = date($this->date_format);
		$save = array(
			'created' => $date,
			'modified' => $date
		);
		for ($i = 0; $i < count($this->fields); $i++) {
			$save[$this->fields[$i]] = $this->input->post($this->fields[$i]);
		}
		return $this->db->insert($this->table, $save);
	}

	// ***********************************************
	// 1
	public function update($id) {
		// 
		$this->db->where('id', $id);

		// 
		$date = date($this->date_format);
		$save = array(
			'modified' => $date
		);
		for ($i = 0; $i < count($this->fields); $i++) {
			$save[$this->fields[$i]] = $this->input->post($this->fields[$i]);
		}
		return $this->db->update($this->table, $save);
	}

	// ***********************************************
	// 
	public function delete($id) {
		$this->db->where('id', $id);
		return $this->db->delete($this->table);
	}
}
