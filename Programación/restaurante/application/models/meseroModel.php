<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class meseroModel extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
}
function guardarOrden($data)
{
  $this->db->insert('orden', $data);
}
function Orden($numero_orden)
{
  $this->db->insert('orden_tiene_platillo', $numero_orden);
}
}
