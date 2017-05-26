<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Usuario extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('ion_auth', 'form_validation');
    $this->load->helper('url');
    $this->load->model('usuarioModel');
    $this->load->model('recepcionistaModel');
  }
  public function index()
  {
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_usuario())
    {
        redirect('auth', 'refresh');
    }
    $this->load->view('usuario/usuario');
  }
  public function vista()
  {
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_usuario())
    {
        redirect('auth', 'refresh');
    }
    $username = $this->input->post('usuario',TRUE);
    $password = $this->input->post('pass',TRUE);

    $data = array(
			'usuario' => $this->usuarioModel->getUsuario($username,$password),
			'dump' => 0);

    $this->load->view('htmlhf/headerUsuario');
    $this->load->view('usuario/vista',$data);
  }
  public function reservacion()
  {
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_usuario())
    {
        redirect('auth', 'refresh');
    }
    $this->load->view('htmlhf/headerUsuario');
    $this->load->view('usuario/reserva');
  }
  public function reservar()
  {
    $data = array(
    'nombre' => $this->input->post('nombre', TRUE),
    'fecha' => $this->input->post('fecha', TRUE),
    'hora' =>  $this->input->post('hora', TRUE),
    'num_persona' =>  $this->input->post('num_persona', TRUE)

    );
    $this ->recepcionistaModel->guardar($data);
    redirect('usuario/vista');
  }
}
