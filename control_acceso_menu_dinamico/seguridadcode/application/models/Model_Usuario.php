<?php

/**
*
*/
class Model_Usuario extends CI_Model
{

  function __construct()
	{		parent::__construct();

			$this->load->database();

	}

	public function listaPerfil(){

		$query=$this->db->query("select * from perfil");
		return $query->result();
		
	}

	public function insertUsuario($perid,$usudni,$usuemail,$usucontrasenia,$usunombres,$usuapellidos,$usucelular,$usuestado){

		$arrayDatos=array(
			'perid'=>$perid,
			'usudni'=>$usudni,
			'usuemail'=>$usuemail,
			//'usucontasenia'=>md5($usucontrasenia),
			'usucontrasenia'=>$usucontrasenia,
			'usunombres'=>$usunombres,
			'usuapellidos'=>$usuapellidos,
			'usucelular'=>$usucelular,
			'usuestado'=>$usuestado
		);
		$this->db->insert('usuario', $arrayDatos);
		
	}

	public function listUsuario(){
		$query=$this->db->query("select *from usuario inner join perfil WHERE usuario.perid=perfil.perid");

		return $query->result();
	}

  public function deleteUsuario($id){

    $this->db->where('usuid',$id);
		$this->db->delete('usuario');
		
  }

  public function editUsuario($id){
    $consulta=$this->db->query("SELECT * FROM usuario u inner join perfil p on u.perid=p.perid WHERE u.usuid=$id");
    return $consulta->result();

  }

  public function updateUsuario($txtusuid,$txtperid,$txtdni,$txtemail,$txtcontrasenia,$txtnombres,$txtapellidos,$txtcelular,$txtestado){
     $array=array(
      'perid'=>$txtperid,
			'usudni'=>$txtdni,
			'usuemail'=>$txtemail,
			 //'usucontasenia'=>md5($txtcontrasenia),
			'usucontrasenia'=>$txtcontrasenia,
 			'usunombres'=>$txtnombres,
 			'usuapellidos'=>$txtapellidos,
 			'usucelular'=>$txtcelular,
 			'usuestado'=>$txtestado
     );

     $this->db->where('usuid',$txtusuid);
     $this->db->update('usuario',$array);
  }
}
