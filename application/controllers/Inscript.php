<?php 

class Inscript extends CI_Controller {
    public function index()
    {
        $this->load->view('Inscription');
    }

    public function Inscription(){
      $user=array(
        'nomUser'=>$this->input->post('nomUser'),
        'mdp'=>$this->input->post('mdp'),
        'login'=>$this->input->post('login'),
          );


    $login_check=$this->user_model->login_check($user['login']);

    if($login_check){
        $this->user_model->model_inscription($user);
        $this->session->set_flashdata('success_msg', 'Vous avez bien été enregistré!');
      }
      else{
        $this->session->set_flashdata('error_msg', "Une erreur s'est produite");
      }
}

}

?>