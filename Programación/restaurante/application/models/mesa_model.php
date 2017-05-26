<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mesa_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
}

function guardar($data) {
		$this->db->insert('mesa', $data);
	}
function borrar($data) {
		$this->db->delete('mesa', $data);
	}

function getMesas(){
		$query = $this->db->get('mesa');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
	
function obtenerMesa($numero){	
    $this->db->where('numero',$numero);
	$query =$this->db->get('mesa');
	if($query->num_rows()>0)
		{
			return $query;
		}else
		{
			return FALSE;
		}
	}

function editarMesa($numero,$data){
		$this->db->where('numero',$numero);
		$this->db->update('mesa',$data);
	}
}



