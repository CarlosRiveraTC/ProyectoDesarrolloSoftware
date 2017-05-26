<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class almacen_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
}
function guardar($data) {
		$this->db->insert('producto', $data);
	}

function getAlmacen(){
		$query = $this->db->get('producto');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}

function getMostrar(){
		$query = $this->db->get('producto');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}

function buscar($query){
	$this->db->like('tipo', $query);
		$query = $this->db->get('producto');
		if ($query->num_rows() > 0 ) {
			return $query;
		}else{
			return FALSE;
		}
	}

function buscarCarnes($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('producto');
		if ($query->num_rows() > 0 ) {
			return $query;
		}else{
			return FALSE;
		}
	}
function buscarFrutas($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('producto');
		if ($query->num_rows() > 0 ) {
			return $query;
		}else{
			return FALSE;
		}
	}
function buscarVerduras($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('producto');
		if ($query->num_rows() > 0 ) {
			return $query;
		}else{
			return FALSE;
		}
	}
function buscarSemillas($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('producto');
		if ($query->num_rows() > 0 ) {
			return $query;
		}else{
			return FALSE;
		}
	}
function buscarEnlatados($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('producto');
		if ($query->num_rows() > 0 ) {
			return $query;
		}else{
			return FALSE;
		}
	}
function buscarPastas($tipo){
		$this->db->like('tipo', $tipo);
		$query = $this->db->get('producto');
		if ($query->num_rows() > 0 ) {
			return $query;
		}else{
			return FALSE;
		}
	}
	function buscarCereales($tipo){
			$this->db->like('tipo', $tipo);
			$query = $this->db->get('producto');
			if ($query->num_rows() > 0 ) {
				return $query;
			}else{
				return FALSE;
			}
		}
function buscarbuscar($query){
		$this->db->like('nombre', $query);
		$query = $this->db->get('producto');
		if ($query->num_rows() > 0 ) {
			return $query;
		}else{
			return FALSE;
		}
	}
	function editarDatos($id,$data){
			$this->db->where('id',$id);
			$this->db->update('producto',$data);
		}
		function Recuperar($query){
		$this->db->where('id', $query);
			$query = $this->db->get('producto');
			if ($query->num_rows() > 0 ) {
				return $query;
			}else{
				return FALSE;
			}
		}
}
