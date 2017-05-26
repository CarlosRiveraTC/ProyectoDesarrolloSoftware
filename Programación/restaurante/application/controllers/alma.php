<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class alma extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('ion_auth');
    $this->load->helper('url');
    $this->load->model('almacen_model');
  }
  public function almacen()
  {
    if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
    {
        redirect('auth', 'refresh');
    }
    $data = array('productos' => $this->almacen_model->getMostrar(),
                  'dump' => 0);
    // $data = array('mesas' => $this->mesa_model->getMesas(), 'dump' => 0);
    $this->load->view('htmlhf/header');
    $this->load->view('auth/almacen',$data);
  }
  function nueva(){
    $data = array(
    'tipo' => $this->input->post('tipo', TRUE),
    'nombre' => $this->input->post('nombre', TRUE),
    'num_pieza' =>  $this->input->post('num_pieza', TRUE),
    'unidad' =>  $this->input->post('unidad', TRUE)
    );

    $this ->almacen_model->guardar($data);
    redirect('alma/almacen');
  }
  public function buscar(){

    if(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){
        redirect('auth', 'refresh');
    }

    $data = array();
    $query = $this->input->get('query', TRUE);

    if($query){
      $result = $this->almacen_model->buscarbuscar($query);
      if ($result != FALSE) {
          $data = array('result' => $result);
      }
    }else{
      $data = array('result' => '');
    }

    $this->load->view('htmlhf/header');
    $this->load->view('auth/almacen_buscar', $data);
  }



  public function MostrarCarnes(){
      $tipo = "Carnes";
      $data = array('productos'=> $this-> almacen_model->buscarCarnes($tipo),'dum' => 0);
      $this->load->view('htmlhf/header');
      $this->load->view('auth/almacen2', $data);
    }
  public function MostrarFrutas(){
      $tipo = "Frutas";
      $data = array('productos'=> $this-> almacen_model->buscarFrutas($tipo),'dum' => 0);
      $this->load->view('htmlhf/header');
      $this->load->view('auth/almacen2', $data);
    }
  public function MostrarVerduras(){
      $tipo = "Verduras";
      $data = array('productos'=> $this-> almacen_model->buscarVerduras($tipo),'dum' => 0);
      $this->load->view('htmlhf/header');
      $this->load->view('auth/almacen2', $data);
    }
  public function MostrarSemillas(){
      $tipo = "Semillas";
      $data = array('productos'=> $this-> almacen_model->buscarSemillas($tipo),'dum' => 0);
      $this->load->view('htmlhf/header');
      $this->load->view('auth/almacen2', $data);
    }
  public function MostrarPastas(){
      $tipo = "Pastas";
      $data = array('productos'=> $this-> almacen_model->buscarPastas($tipo),'dum' => 0);
      $this->load->view('htmlhf/header');
      $this->load->view('auth/almacen2', $data);
    }
  public function MostrarEnlatados(){
      $tipo = "Enlatados";
      $data = array('productos'=> $this-> almacen_model->buscarEnlatados($tipo),'dum' => 0);
      $this->load->view('htmlhf/header');
      $this->load->view('auth/almacen2', $data);

    }
    public function MostrarCereales(){
      $tipo = "Cereales";
      $data = array('productos'=> $this-> almacen_model->buscarCereales($tipo),'dum' => 0);
      $this->load->view('htmlhf/header');
      $this->load->view('auth/almacen2', $data);
    }
/*public function agregarproducto(){

    if(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){
        redirect('auth', 'refresh');
    }

    $data = array();
    $query = $this->input->get('query', TRUE);

    if($query){
      $result = $this->almacen_model->guardarpro($query);
      if ($result != FALSE) {
          $data = array('result' => $result);
      }
    }else{
      $data = array('result' => '');
    }

    $data = array(
    'num_pieza' => $this->input->post('num_pieza', TRUE)
    );

    $this ->almacen_model->guardar($data+$data);
    redirect('alma/almacen_buscar');
  }*/

  public function MasProductos(){
  if(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){
    redirect('auth', 'refresh');
}
$id = $this->uri->segment(3);
$obtenerDatos = $this->almacen_model->Recuperar($id);
if($obtenerDatos != FALSE)
{
  foreach ($obtenerDatos->result() as $row) {
  $tipo = $row->tipo;
  $nombre = $row->nombre;
  $num_pieza =$row->num_pieza;
  $unidad = $row->unidad;
  }
  $data = array('id' => $id,
                'tipo'=>$tipo,
                'nombre'=>$nombre,
                'num_pieza'=>$num_pieza,
                'unidad'=>$unidad );
}else{
  $data = '';
  return FALSE;
}

$this->load->view('htmlhf/header');
$this->load->view('auth/almacen_mas_producto',$data);
}

public function guardaredit(){
      $id = $this->uri->segment(3);

    $data = array(
      'tipo'=> $this->input->post('tipo',TRUE),
    'nombre' => $this->input->post('nombre', TRUE),
    'num_pieza' =>  $this->input->post('num_pieza', TRUE),
    'unidad' =>  $this->input->post('unidad', TRUE)
    );

    $this->almacen_model->editarDatos($id,$data);
    redirect('alma/almacen');
}

}
