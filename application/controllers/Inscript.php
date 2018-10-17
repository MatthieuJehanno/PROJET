<?php 

class Inscript extends CI_Controller {
    public function index()
    {
        $this->load->view('Inscription');
    }

    public function Inscription(){
         $this->form_validation_set_rules('nomUser','NomUser', 'required');
    }
}


?>