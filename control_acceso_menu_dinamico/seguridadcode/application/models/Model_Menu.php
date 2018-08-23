<?php


class Model_Menu extends CI_Model {
    
    function __construct()
    {		
        parent::__construct();
        $this->load->database();
        
    }

    public function listarmenus($idmenu)
    {
        $query=$this->db->query("SELECT * from mep mp inner join menu me on mp.menid = me.menid where mp.perid = '$idmenu'");
        return $query->result();
    }
    public function listarsubmenus()
    {
        $query=$this->db->query("SELECT * FROM menu");
        return $query->result();
    }
}