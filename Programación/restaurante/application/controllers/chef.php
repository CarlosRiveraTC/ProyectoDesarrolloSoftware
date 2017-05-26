<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class chef extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library('ion_auth');
    $this->load->helper('url');
    $this->load->model('orden_model');
  }

  public function index(){
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_chef())
    {
        redirect('auth', 'refresh');
    }
     $data = array('ordenes' => $this->orden_model->getOrdenes(), 'dump' => 0);
    $this->load->view('htmlhf/headerChef');
    $this->load->view('chef/chefPedidos', $data);
  }

  public function espera()
  {
    $numero_orden = $this->uri->segment(3);
    $id_platillo = $this->uri->segment(4);
    $obtenerOrden = $this->orden_model->obtenerOrdenPlatillo($numero_orden,$id_platillo);
    if ($obtenerOrden != FALSE) {
    foreach ($obtenerOrden->result() as $row) {
        $numero_orden = $row->numero_orden;
        $id_platillo = $row->id_platillo;
      }
      $status = "En espera";
    }
    $data = array('numero_orden' =>$numero_orden ,
                  'id_platillo' => $id_platillo,
                  'status'=>$status );
    $this->orden_model->editarOrden($numero_orden,$id_platillo, $data);
    redirect('chef');
  }

  public function terminado()
  {
    $numero_orden = $this->uri->segment(3);
    $id_platillo = $this->uri->segment(4);
    $obtenerOrden = $this->orden_model->obtenerOrdenPlatillo($numero_orden,$id_platillo);
    if ($obtenerOrden != FALSE) {
		foreach ($obtenerOrden->result() as $row) {
				$numero_orden = $row->numero_orden;
				$id_platillo = $row->id_platillo;
			}
      $status = "Terminado";
    }
    $data = array('numero_orden' =>$numero_orden ,
                  'id_platillo' => $id_platillo,
                  'status'=>$status );
    $this->orden_model->editarOrden($numero_orden,$id_platillo, $data);
    redirect('chef');

  }

  public function cocinando()
   {
     $numero_orden = $this->uri->segment(3);
     $getOrdenes = $this->orden_model->getOrden($numero_orden);
     if ($getOrdenes != FALSE) {
     foreach ($getOrdenes->result() as $row) {
       $fecha =$row->fecha;
         $numero_orden = $row->numero_orden;
         $num_mesa = $row->num_mesa;
       }
       $estado = "Terminada";
     }
     $data = array('numero_orden' =>$numero_orden,
                   'fecha' => $fecha,
                   'num_mesa'=>$num_mesa,
                   'estado' =>$estado
                    );
     $this->orden_model->estadoOrden($numero_orden, $data);

     redirect('chef');
   }

   public function concluido()
  {
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_chef())
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
  }

  public function status(){
     if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_chef())

     {
         redirect('auth', 'refresh');
     }
      $numero_orden = $this->uri->segment(3);
     $data = array('orden_platillo' => $this->orden_model->obtenerOrden($numero_orden), 'dump' => 0);

     $this->load->view('htmlhf/headerChef');
     $this->load->view('chef/chef', $data);
   }

}
