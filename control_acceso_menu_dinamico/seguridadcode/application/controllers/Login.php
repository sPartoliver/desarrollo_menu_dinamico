<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
  /*public function index(){
    $this->load->view('login');
  }

  public function lista(){
    $this->load->view('lista');
  }*/

  function __construct(){
    parent:: __construct();
    $this->load->model('Model_Login');
  }

  public function index()
  {
    $data['contenido']="login";
    $this->load->view("plantilla",$data);
    
  }

  public function validar(){
     $datos=$this->input->post();
     $correo=$datos["txtCorreo"];
     $contrasenia=$datos["txtContrasenia"];
    
     $datosusuario=$this->Model_Login->existeUsuario($correo,$contrasenia);
    
    foreach ($datosusuario as $value) {
      $nombres=$value->usunombres;
      $estado=$value->usuestado;
      $perfil=$value->perid;
    }
    
    if(count($datosusuario)>0 && $estado==1){

      $datoscomp=array(
        'usunombres'=>$nombres,
        'usuemail'=>$correo,
        'perid'=>$perfil, 
        'logged_in'=>TRUE
      );

      $this->session->set_userdata($datoscomp);
    }

    else{
      $messageCorrecto = "<div id='success' class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <strong>Hola $correo !</strong> Error en usuario y/o contraseña.
                </div>";

      echo $messageCorrecto;
    }
  }
}
?>