<?php

/**
 *
 */
class Principal extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index(){
    //$data['contenido']='principal';
    $data['contenido']='menu/home';
    $this->load->view('plantilla',$data);
  }
}
