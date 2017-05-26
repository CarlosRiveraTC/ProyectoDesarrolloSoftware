<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class menu extends CI_Controller{

 function __construct()
  {
    parent::__construct();
    $this->load->library('ion_auth');
    $this->load->helper('url');
    $this->load->model('menu_modelo');
  }

 public function vista(){
   $data = array('platillos' => $this->menu_modelo->getMostrar(),'dump' => 0);
    $this->load->view('htmlhf/headerMenu');
    $this->load->view('carta',$data);
  }

    public function MostrarPostre(){
      $tipo = "Postre";
      $data = array('platillos'=> $this-> menu_modelo->buscarPostre($tipo),'dum' => 0);
      $this->load->view('htmlhf/headerMenu');
      $this->load->view('carta',$data);
    }

    public function MostrarBebida(){
      $tipo = "Bebida";
      $data = array('platillos'=> $this->menu_modelo->buscarBebida($tipo), 'dum' =>0);
      $this->load->view('htmlhf/headerMenu');
      $this->load->view('carta',$data);
    }

    public function MostrarDesayuno(){
      $tipo = "Desayuno";
      $data = array('platillos' => $this->menu_modelo->buscarDesayuno($tipo), 'dum' =>0);
      $this->load->view('htmlhf/headerMenu');
      $this->load->view('carta',$data);
    }

    public function MostrarEnsalada(){
      $tipo = "Ensalada";
      $data = array('platillos' => $this->menu_modelo->buscarEnsalada($tipo), 'dum' =>0);
      $this->load->view('htmlhf/headerMenu');
      $this->load->view('carta',$data);
    }
    public function MostrarAve(){
      $tipo = "Ave";
      $data = array('platillos' => $this->menu_modelo->buscarAve($tipo), 'dum' =>0);
      $this->load->view('htmlhf/headerMenu');
      $this->load->view('carta',$data);
    }
    public function MostrarEntrada(){
      $tipo = "Entrada";
      $data = array('platillos' => $this->menu_modelo->buscarEntrada($tipo), 'dum' =>0);
      $this->load->view('htmlhf/headerMenu');
      $this->load->view('carta',$data);
    }
}