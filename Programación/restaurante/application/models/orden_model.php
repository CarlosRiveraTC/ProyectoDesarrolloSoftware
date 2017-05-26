<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class orden_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
}

function getOrdenes()
{
	$query = $this->db->get('orden');
	if($query->num_rows()>0)
	{
		return $query;
	}else {
		return FALSE;
	}
}

function getMostrar(){
		$query = $this->db->get('orden_tiene_platillo');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
	function obtenerOrden($numero_orden){
	    $this->db->where('numero_orden',$numero_orden);
		$query =$this->db->get('orden_tiene_platillo');
		if($query->num_rows()>0)
			{
				return $query;
			}else
			{
				return FALSE;
			}
		}
		function obtenerOrdenPlatillo($numero_orden,$id_platillo)
		{
			$this->db->where('numero_orden',$numero_orden);
			$this->db->where('id_platillo',$id_platillo);
		$query =$this->db->get('orden_tiene_platillo');
		if($query->num_rows()>0)
			{
				return $query;
			}else
			{
				return FALSE;
			}

		}
		function editarOrden($numero_orden,$id_platillo,$data){
				$this->db->where('numero_orden',$numero_orden);
				$this->db->where('id_platillo',$id_platillo);
				$this->db->update('orden_tiene_platillo',$data);
			}
			function estadoOrden($numero_orden,$data){
					$this->db->where('numero_orden',$numero_orden);
					$this->db->update('orden',$data);
				}
		function getOrden($numero_orden){
			  $this->db->where('numero_orden',$numero_orden);
				$query =$this->db->get('orden');
				if($query->num_rows()>0)
					{
						return $query;
					}else
					{
						return FALSE;
					}
				}
				function borrarOrden($numero_orden)
				{
					$this->db->where('numero_orden',$numero_orden);
					$this->db->delete('orden');
				}
}
