<?php


class Model_Visiteur extends CI_Model{
    public function GetAllVisiteur(){
        $sql = $this->db->query("select * from visiteur");
       return $sql->result();
    }
}
