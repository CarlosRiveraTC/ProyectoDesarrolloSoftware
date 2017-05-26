<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class platilloModel extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
}
	function guardar($data) {
		$this->db->insert('platillo', $data);
	}

	function getMostrar(){
		$query = $this->db->get('platillo');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
}

//$this->db->select('tipo, nombre, precio, ingredientes,tiempo_preparacion');
		//$this->db->from('platillo');
		//	$r->this->db->get();
		//	return $r->result();
