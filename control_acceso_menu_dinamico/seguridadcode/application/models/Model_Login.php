<?php

class Model_Login extends CI_Model
{
    function __construct(){
        parent::__construct();
        # comunicacion con el modelo
        $this->load->database();
    }

    public function selPerfil()
    {
        # code... enviar a plattilla la vista index
        $query = $this->db->query("select * from perfil");
        /** retornamos todo los registros */
        return $query->result();
    }
    
    public function existeUsuario($correo,$contrasenia){

        //$a=md5($contrasenia);
            $query=$this->db->query("select * from usuario WHERE usuemail='$correo' and usucontrasenia='$contrasenia'");
            return $query->result();
    }

    public function isLoggedIn(){
        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        $is_logged_in = $this->session->userdata('logged_in');
        if(!isset($is_logged_in) || $is_logged_in!==TRUE){
            redirect('/');
            exit;
        }else{
            if(!$this->uriAccess()){
                redirect('inicio/access_denied');
                exit;
            }
        }
    }

}