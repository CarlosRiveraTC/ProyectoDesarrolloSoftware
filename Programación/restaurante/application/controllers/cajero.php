<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class cajero extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library('ion_auth');
    $this->load->helper('url');
    $this->load->model('cajeroModel');
    $this->load->model('orden_model');
  }

  public function index() {
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_cajero()){
        redirect('auth', 'refresh');
    }
   $data = array('ordenes' => $this->cajeroModel->mostrar(),
                 'tickets' => $this->cajeroModel->buscarTicket(), 'dump' => 0);

    $this->load->view('htmlhf/headerCajero');
    $this->load->view('cajero/cajero',$data);
  }
  
  public function pagar(){
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_cajero()){
        redirect('auth', 'refresh');
    }
    $num_orden = $this->uri->segment(3);
    $data = array(
      'orden'=> $this->orden_model->getOrden($num_orden),
      'platillos' => $this->cajeroModel->buscarPlatillo($num_orden), 
      'dump' => 0);
    $this->load->view('htmlhf/headerCajero');
    $this->load->view('cajero/pagar', $data);
  }

  function guardarTicket(){

    $numero_orden = $this->input->post('numero_orden', TRUE);
    $estado = "Por facturar";
    $ticket = array(
    'folio' => $this->input->post('folio', TRUE),
    'fecha' =>  $this->input->post('fecha', TRUE),
    'numero_orden' =>  $numero_orden,
    'subtotal' => $this->input->post('subtotal', TRUE),
    'total' => $this->input->post('total', TRUE),
    'estado' => $estado);

       $obtenerOrden = $this->orden_model->getOrden($numero_orden);
       if ($obtenerOrden != FALSE) {
      foreach ($obtenerOrden->result() as $row) {
          $numero_orden = $row->numero_orden;
          $fecha = $row->fecha;
          $num_mesa = $row->num_mesa;
        }
         $estado = "Pagado";
       }
       $data = array('numero_orden' =>$numero_orden ,
                     'fecha' => $fecha,'num_mesa'=>$num_mesa,
                      'estado' => $estado);
    $this->orden_model->estadoOrden($numero_orden, $data);
    $this ->cajeroModel->guardarTicket($ticket);
    redirect('cajero');

  } 

public function facturas(){

  if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_cajero()){
        redirect('auth', 'refresh');
  }
  $folio = $this->uri->segment(3);
  $obtenerTicket = $this->cajeroModel->recuperarTicket($folio);
  if($obtenerTicket != FALSE)
  {
    foreach ($obtenerTicket->result() as $row) {
    $folio = $row->folio;
    $fecha = $row->fecha;
    $total =$row->total;
  }
  $data = array('folio' => $folio, 'fecha'=>$fecha, 'total'=>$total);
  }else{
    $data = '';
    return FALSE;
}
  $estado = "Facturado";
  $ticket = array(
    'estado' => $estado);

    $this ->cajeroModel->estadoTicket($ticket);
    $this->load->view('htmlhf/headerCajero');
    $this->load->view('cajero/facturas',$data);
}

function guardarFactura(){
    $factura = array(
    'numero' => $this->input->post('numero', TRUE),
    'cliente' =>  $this->input->post('cliente', TRUE),
    'rfc' => $this->input->post('rfc', TRUE),
    'email' => $this->input->post('email', TRUE),
    'folio_ticket' => $this->input->post('folio_ticket', TRUE),
    'fecha' => $this->input->post('fecha', TRUE),
    'concepto' => $this->input->post('concepto', TRUE),
    'total' => $this->input->post('total', TRUE)
    );

    $this ->cajeroModel->guardarFactura($factura);
    redirect('cajero');
  }

  public function buscarFactura(){
    if(!$this->ion_auth->logged_in() || !$this->ion_auth->es_cajero()){
        redirect('auth', 'refresh');
    }
   $data = array('facturas' => $this->cajeroModel->buscarFactura(), 'dump' => 0);
    $this->load->view('htmlhf/headerCajero');
    $this->load->view('cajero/allfacturas',$data);
  }
}