<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main_controlleur extends CI_Controller {


    //affiche la page d'accueil
   public function index(){
        $data['content']='accueil';
        $data['header']='visiteur';
        $this->load->vars($data);
        $this->load->view('template');
       
    }
}

?>