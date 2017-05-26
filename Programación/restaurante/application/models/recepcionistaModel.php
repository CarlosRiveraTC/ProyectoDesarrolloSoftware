<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class recepcionistaModel extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function guardar($data) {
		$this->db->insert('reservacion', $data);
	}

	function getMostrar(){
		$query = $this->db->get('reservacion');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function buscar($query){
		$this->db->like('cliente', $query);
		$query = $this->db->get('reservacion');
		if ($query->num_rows() > 0 ) {
			return $query;
		}else{
			return FALSE;
		}
	}

	/*function ocupar($nmesa,$disponibilidad)
	{
		$this->db->where('numero',$nmesa);
		$this->db->update('mesa','disponibilidad',$disponibilidad);
	}*/
}
