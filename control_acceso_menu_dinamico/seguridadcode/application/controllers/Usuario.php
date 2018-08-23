<?php

class Usuario extends CI_controller
{
    function __construct(){
        parent:: __construct();
        $this->load->model('Model_Usuario');
    }

    public function index()
    {
        # code... enviar a plattilla la vista index
        $data['contenido'] = "usuario/index";
        //$data['selPerfil'] = $this->Model_Usuario->selPerfil();
        $data['listaPerfil'] = $this->Model_Usuario->listaPerfil();
        $data['listaUsuario'] = $this->Model_Usuario->listUsuario();
        
        $this->load->view("plantilla",$data);
        
    }

    public function insert(){
        $datos = $this->input->post();

        if (isset($datos)) {
            $txtid = $datos['txtIdper'];
            $txtdni = $datos['txtDni'];
            $txtcorreo = $datos['txtCorreo'];
            $txtcontrasenia = $datos['txtContrasenia'];
            $txtnombres = $datos['txtNombres'];
            $txtapellidos = $datos['txtApellidos'];
            $txtcelular = $datos['txtCelular'];
            $txtestado = $datos['txtEstado'];
            $this->Model_Usuario->insertUsuario($txtid,$txtdni,$txtcorreo,$txtcontrasenia,$txtnombres,$txtapellidos,$txtcelular,$txtestado);
            redirect('');
            
        }
    }

    public function delete($id = NULL){
        
        if ($id != NULL) {
            $this->Model_Usuario->deleteUsuario($id);
            redirect('');
        }
        
    }   

    public function edit($id = NULL){
        if ($id != NULL) {
            //mostrar datos 
            $data['contenido'] = "usuario/edit";
            $data['listaPerfil'] = $this->Model_Usuario->listaPerfil();
            $data['datosUsuario'] = $this->Model_Usuario->editUsuario($id);
            
            $this->load->view("plantilla",$data);
        }
        else{
            //regresar al index enviar parametros
            redirect('');
        }
    }

    public function update(){
        $datos = $this->input->post();

        if (isset($datos)) {
            $txtidusu = $datos['txtusuid'];
            $txtidper = $datos['txtperid'];
            $txtdni = $datos['txtDni'];
            $txtcorreo = $datos['txtCorreo'];
            $txtcontrasenia = $datos['txtContrasenia'];
            $txtnombres = $datos['txtNombres'];
            $txtapellidos = $datos['txtApellidos'];
            $txtcelular = $datos['txtCelular'];
            $txtestado = $datos['txtEstado'];
            $this->Model_Usuario->updateUsuario($txtidusu,$txtidper,$txtdni,$txtcorreo,$txtcontrasenia,$txtnombres,$txtapellidos,$txtcelular,$txtestado);
            redirect('');
            
        }
    }
    
}
