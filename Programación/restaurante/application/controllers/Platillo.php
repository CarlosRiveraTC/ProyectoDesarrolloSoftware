<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Platillo extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('ion_auth');
    $this->load->helper('url');
    $this->load->model('platilloModel');
  }

  public function vista()
  {
    if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
    {
        redirect('auth', 'refresh');
    }
    $data = array('platillos' => $this->platilloModel->getMostrar(),
                  'dump' => 0);
    $this->load->view('htmlhf/header');
    $this->load->view('auth/vista',$data);
  }


 function guardar(){

    $data = array(
    'tipo' => $this->input->post('tipo', TRUE),
    'nombre' => $this->input->post('nombre', TRUE),
    'precio' =>  $this->input->post('precio', TRUE),
    'ingredientes' =>  $this->input->post('ingredientes', TRUE),
    'tiempo_preparacion' =>  $this->input->post('tiempo_preparacion', TRUE),

    );
    $this ->platilloModel->guardar($data);
    redirect('Platillo/vista');

  }
public function Mostrar(){
  $data = array(
    'tipo'=> $this-> platilloModel->ver(),
    'dum' => 0);
  $this->load->view('header/ibrerias');
  $this->load->view('Mostrar',$data);


}

}
//public function Mostrar(){
  //$this->platilloModel->Mostrar();
  //redirect('Platillo/vista');
