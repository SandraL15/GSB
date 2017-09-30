<?php

class Ctrl_Visiteur extends CI_Controller{
    
       public function index(){
           
       $this->load->model("Model_Visiteur"); 
       $data["lesVisiteurs"] = $this->Model_Visiteur->GetAllVisiteur();
        
        $this->load->view("v_visiteur",$data);
    }
}
