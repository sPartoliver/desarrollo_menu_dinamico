
<?php

class Menu extends CI_Controller
{
  //public $permisos;
  function __construct()
  {
    parent::__construct();
    //$this->permisos = $this->listalibrerias->control();
    $this->load->model('Model_Menu');
  }

  public function index(){
    //$data['contenido']='principal';
    $peridmenu  =  $this->session->userdata('perid');
    $data['tablas']=$this->Model_Menu->listarmenus($peridmenu);
    $data['subtablas']=$this->Model_Menu->listarsubmenus();
    $data['contenido']='menu/home';
    $this->load->view('plantilla',$data);
  }

}