<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class recepcionista extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library('ion_auth');
    $this->load->helper('url');
    $this->load->model('recepcionistaModel');
    $this->load->model('mesa_model');
  }

  public function index(){
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_recepcionista())
    {
        redirect('auth', 'refresh');
    }
     $data = array('mesas' => $this->mesa_model->getMesas(), 'dump' => 0);
    $this->load->view('htmlhf/headerRecepcionista');
    $this->load->view('recepcionista/recepcionista', $data);
  }

  public function reservar(){
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_recepcionista())
    {
        redirect('auth', 'refresh');
    }
      $data = array('reservacion' => $this->recepcionistaModel->getMostrar(), 'dump' => 0);
      $this->load->view('htmlhf/headerRecepcionista');
      $this->load->view('recepcionista/reservacion', $data);
  }

 function reservacion(){
    $data = array(
    'cliente' => $this->input->post('cliente', TRUE),
    'fecha' => $this->input->post('fecha', TRUE),
    'hora' =>  $this->input->post('hora', TRUE),
    'num_persona' =>  $this->input->post('num_persona', TRUE)
    );

    $this ->recepcionistaModel->guardar($data);
    redirect('recepcionista/reservar');
  }

  public function buscar(){

    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_recepcionista()){
        redirect('auth', 'refresh');
    }

    $data = array();
    $query = $this->input->get('query', TRUE);

    if($query){
      $result = $this->recepcionistaModel->buscar($query);
      if ($result != FALSE) {
          $data = array('result' => $result);
      }
    }else{
      $data = array('result' => '');
    }

    $this->load->view('htmlhf/headerRecepcionista');
    $this->load->view('recepcionista/buscar', $data);
  }
  public function ocupar()
  {
    $numero = $this->uri->segment(3);
    $obtenerMesa = $this->mesa_model->obtenerMesa($numero);
    if ($obtenerMesa != FALSE) {
		foreach ($obtenerMesa->result() as $row) {
				$numero = $row->numero;
				$num_sillas = $row->numero_sillas;
			}
      $disponibilidad = "NO";
    }
    $data = array('numero' =>$numero ,
                  'numero_sillas' => $num_sillas,
                  'disponibilidad'=>$disponibilidad );
    $this->mesa_model->editarMesa($numero, $data);
    redirect('recepcionista');
  }
  public function liberar()
  {
    $numero = $this->uri->segment(3);
    $obtenerMesa = $this->mesa_model->obtenerMesa($numero);
    if ($obtenerMesa != FALSE) {
		foreach ($obtenerMesa->result() as $row) {
				$numero = $row->numero;
				$num_sillas = $row->numero_sillas;
			}
      $disponibilidad = "SI";
    }
    $data = array('numero' =>$numero ,
                  'numero_sillas' => $num_sillas,
                  'disponibilidad'=>$disponibilidad );
    $this->mesa_model->editarMesa($numero, $data);
    redirect('recepcionista');
  }
}
