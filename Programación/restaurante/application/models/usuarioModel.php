<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuarioModel extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
}
function getUsuario($username,$password)
{
	$this->db->where('correo',$username);
	$this->db->where('password',$password);
}
}
