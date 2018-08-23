<?php

class listalibrerias
{
    private $CI;
    function __construct(){
        $this->CI = & get_instance();
    } 

    public function control()
    {
        if (!$this->CI->session->userdata("logged_in")) {
            redirect();
        }

        $url = $this->CI->uri->segment(1);

        $infomemu = $this->CI->Model_Menu->getID($url);

        $permisos = $this->CI->Model_Menu->getPermisos($infomemu->id,$this->CI->session->userdata("perid"));
        if ($permisos->read == 0) {
            redirect();
        }else {
            return $permisos;
        }
    }
}