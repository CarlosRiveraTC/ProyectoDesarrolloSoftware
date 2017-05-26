<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menu_modelo extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function getMostrar(){
		$query = $this->db->get('platillo');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function buscarPostre($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('platillo');
		if ($query->num_rows() > 0 ) {
			return $query;
		}else{
			return FALSE;
		}
	}

	function buscarBebida($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('platillo');
		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return FALSE;
		}
	}

	function buscarDesayuno($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('platillo');
		if ($query->num_rows()>0) {
			return $query;
		}else{
			return FALSE;
		}
	}

		function buscarEnsalada($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('platillo');
		if ($query->num_rows()>0) {
			return $query;
		}else{
			return FALSE;
		}
	}
		function buscarAve($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('platillo');
		if ($query->num_rows()>0) {
			return $query;
		}else{
			return FALSE;
		}
	}
		function buscarEntrada($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('platillo');
		if ($query->num_rows()>0) {
			return $query;
		}else{
			return FALSE;
		}
	}

}
