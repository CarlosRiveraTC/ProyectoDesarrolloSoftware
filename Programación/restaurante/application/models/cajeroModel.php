<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cajeroModel extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
}

function mostrar(){
	$query = $this->db->get('orden');
	if ($query->num_rows() > 0){
		return $query;
	}else{
		return FALSE;
	}
}

function buscarTicket(){
	$query = $this->db->get('ticket');
	if ($query->num_rows() > 0){
		return $query;
	}else{
		return FALSE;
	}
}

function buscarPlatillo($num_orden){

	$this->db->SELECT('otp.numero_orden, p.tipo, p.nombre, p.precio');
	$this->db->FROM('orden_tiene_platillo otp');
	$this->db->where('otp.numero_orden',$num_orden);
	$this->db->join('platillo p', 'otp.id_platillo = p.id');
	$query = $this->db->get();
	return $query;

//SELECT otp.num_orden, p.tipo, p.nombre, p.precio FROM orden_tiene_platillo otp INNER JOIN platillo p ON otp.id_platillo = p.id
}

function guardarTicket($ticket){
	$this->db->insert('ticket', $ticket);
}

function recuperarTicket($query){
		$this->db->where('folio', $query);
			$query = $this->db->get('ticket');
			if ($query->num_rows() > 0 ) {
				return $query;
			}else{
				return FALSE;
			}
		}

function guardarFactura($factura){
	$this->db->insert('factura', $factura);
}

function estadoTicket($ticket){
	$this->db->update('ticket',$ticket);
}

function buscarFactura(){
	$query = $this->db->get('factura');
	if ($query->num_rows() > 0){
		return $query;
	}else{
		return FALSE;
	}
}

}