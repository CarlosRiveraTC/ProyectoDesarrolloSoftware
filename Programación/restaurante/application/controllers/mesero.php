<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Mesero extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('ion_auth');
    $this->load->helper('url');
    $this->load->model('mesa_model');
    $this->load->model('menu_modelo');
    $this->load->model('meseroModel');
    $this->load->model('orden_model');
    $this->load->model('platilloModel');
  }

  public function index()
  {
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
    {
        redirect('auth', 'refresh');
    }
    $data = array('mesas' => $this->mesa_model->getMesas(), 'dump' => 0);
    $this->load->view('htmlhf/headerMesero');
    $this->load->view('mesero/mesero',$data);
  }

  public function ordenes()
  {
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
    {
        redirect('auth', 'refresh');
    }
    $data = array('ordenes'=> $this-> orden_model->getOrdenes(),'dum' => 0);
    $this->load->view('htmlhf/headerMesero');
    $this->load->view('mesero/ordenes',$data);
  }
     public function MostrarPostre(){
       if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
       {
           redirect('auth', 'refresh');
       }
       $numero_orden = $this->uri->segment(3);
       $tipo = "Postre";
       $data = array(
         'orden'=> $this->orden_model->getOrden($numero_orden),
         'platillos'=> $this-> menu_modelo->buscarPostre($tipo),
         'tiene' => $this->orden_model->obtenerOrden($numero_orden),
         'dum' => 0);
       $this->load->view('htmlhf/headerMesero');
       $this->load->view('mesero/orden',$data);
     }

     public function MostrarBebida(){
       if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
       {
           redirect('auth', 'refresh');
       }
        $numero_orden = $this->uri->segment(3);
       $tipo = "Bebida";
       $data = array(
         'orden'=> $this->orden_model->getOrden($numero_orden),
       'platillos'=> $this->menu_modelo->buscarBebida($tipo),
       'tiene' => $this->orden_model->obtenerOrden($numero_orden),
        'dum' =>0);
       $this->load->view('htmlhf/headerMesero');
       $this->load->view('mesero/orden',$data);
     }

     public function MostrarDesayuno(){
       if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
       {
           redirect('auth', 'refresh');
       }
        $numero_orden = $this->uri->segment(3);
       $tipo = "Desayuno";
       $data = array(
         'orden'=> $this->orden_model->getOrden($numero_orden),
         'platillos' => $this->menu_modelo->buscarDesayuno($tipo),
         'tiene' => $this->orden_model->obtenerOrden($numero_orden),
          'dum' =>0);
       $this->load->view('htmlhf/headerMesero');
       $this->load->view('mesero/orden',$data);
     }

     public function MostrarEnsalada(){
       if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
       {
           redirect('auth', 'refresh');
       }
        $numero_orden = $this->uri->segment(3);
       $tipo = "Ensalada";
       $data = array(
         'orden'=> $this->orden_model->getOrden($numero_orden),
         'platillos' => $this->menu_modelo->buscarEnsalada($tipo),
         'tiene' => $this->orden_model->obtenerOrden($numero_orden),
          'dum' =>0);
       $this->load->view('htmlhf/headerMesero');
       $this->load->view('mesero/orden',$data);
     }
     public function MostrarAve(){
       if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
       {
           redirect('auth', 'refresh');
       }
        $numero_orden = $this->uri->segment(3);
       $tipo = "Ave";
       $data = array(
         'orden'=> $this->orden_model->getOrden($numero_orden),
         'platillos' => $this->menu_modelo->buscarAve($tipo),
         'tiene' => $this->orden_model->obtenerOrden($numero_orden),
       'dum' =>0);
       $this->load->view('htmlhf/headerMesero');
       $this->load->view('mesero/orden',$data);
     }
     public function MostrarEntrada(){
       if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
       {
           redirect('auth', 'refresh');
       }
        $numero_orden = $this->uri->segment(3);
       $tipo = "Entrada";
       $data = array(
         'orden'=> $this->orden_model->getOrden($numero_orden),
         'platillos' => $this->menu_modelo->buscarEntrada($tipo),
         'tiene' => $this->orden_model->obtenerOrden($numero_orden),
          'dum' =>0);
       $this->load->view('htmlhf/headerMesero');
       $this->load->view('mesero/orden',$data);
     }
     public function mesa()
     {
       if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
       {
           redirect('auth', 'refresh');
       }
       $estado = "Ordenada";
       $data = array(
       'numero_orden' =>$this->input->post('noOrden', TRUE),
       'fecha' => $this->input->post('fecha', TRUE),
       'num_mesa'=> $this->input->post('noMesa', TRUE),
       'estado' => $estado,
       );
         $this->meseroModel->guardarOrden($data);
         redirect('mesero/ordenes');
     }
     public function orden()
     {
       if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
       {
           redirect('auth', 'refresh');
       }
       $numero_orden = $this->uri->segment(3);
       $data = array(
         'orden'=> $this->orden_model->getOrden($numero_orden),
         'platillos' => $this->menu_modelo->getMostrar(),
         'tiene' => $this->orden_model->obtenerOrden($numero_orden),
         'dum' => 0);
       $this->load->view('htmlhf/headerMesero');
       $this->load->view('mesero/orden',$data);
     }
     public function cocinar()
     {
       if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
       {
           redirect('auth', 'refresh');
       }
       $numero_orden = $this->uri->segment(3);
       $obtenerOrden = $this->orden_model->getOrden($numero_orden);
       if ($obtenerOrden != FALSE) {
   		foreach ($obtenerOrden->result() as $row) {
   				$numero_orden = $row->numero_orden;
   				$fecha = $row->fecha;
          $num_mesa = $row->num_mesa;
   			}
         $estado = "Cocinando";
       }
       $data = array('numero_orden' =>$numero_orden ,
                     'fecha' => $fecha,
                     'num_mesa'=>$num_mesa,
                      'estado' => $estado);
       $this->orden_model->estadoOrden($numero_orden, $data);
       redirect('mesero/ordenes');
     }

     public function pagar()
     {
       if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
       {
           redirect('auth', 'refresh');
       }
       $numero_orden = $this->uri->segment(3);
       $obtenerOrden = $this->orden_model->getOrden($numero_orden);
       if ($obtenerOrden != FALSE) {
   		foreach ($obtenerOrden->result() as $row) {
   				$numero_orden = $row->numero_orden;
   				$fecha = $row->fecha;
          $num_mesa = $row->num_mesa;
   			}
         $estado = "Pagando";
       }
       $data = array('numero_orden' =>$numero_orden ,
                     'fecha' => $fecha,
                     'num_mesa'=>$num_mesa,
                      'estado' => $estado);
       $this->orden_model->estadoOrden($numero_orden, $data);
       redirect('mesero/ordenes');
     }
    public function agregarP()
    {
      if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
      {
          redirect('auth', 'refresh');
      }
       $num_orden = $this->uri->segment(3);
       $id = $this->uri->segment(4);
       $status = "En espera";
       $data = array('numero_orden' =>$num_orden,
                      'id_platillo' => $id,
                      'status'=>$status);
       $this->meseroModel->Orden($data);
       redirect('mesero/ordenes');
    }
    public function borrar()
    {
      if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_mesero())
      {
          redirect('auth', 'refresh');
      }
      $numero_orden = $this->uri->segment(3);
      if($numero_orden)
      {
        $this->orden_model->borrarOrden($numero_orden);
        redirect('chef/ordenes');
      }
    }
}
