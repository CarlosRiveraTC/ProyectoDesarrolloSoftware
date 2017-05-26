<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class mesa extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('ion_auth');
    $this->load->helper('url');
    $this->load->model('mesa_model');
  }
 public function new_mesa()
  {
    if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
    {
        redirect('auth', 'refresh');
    }
    $data = array('mesas' => $this->mesa_model->getMesas(), 'dump' => 0);
    $this->load->view('htmlhf/header');
    $this->load->view('auth/new_mesa',$data);
  }

  function nueva(){
    $data = array(
    'numero' => $this->input->post('numero', TRUE),
    'numero_sillas' => $this->input->post('numero_sillas', TRUE),
    'disponibilidad' =>  $this->input->post('disponibilidad', TRUE)
    );
    
    $this ->mesa_model->guardar($data);
    redirect('mesa/new_mesa');
  }

}