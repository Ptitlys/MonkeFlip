<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main_controlleur extends CI_Controller {


    //affiche la page d'accueil
   public function index(){
        $data['titre']="Accueil";
        $data['content']='accueil';
        $data['header']='utilisateur';
        $this->load->vars($data);
        $this->load->view('template');
       
    }

    public function catalogue(){
        $data['titre']="Catalogue";
        $data['content']='catalogue';
        $data['header']='utilisateur';
        $this->load->vars($data);
        $this->load->view('template');
    }

    public function vos_offres(){
        $data['titre']="Vos offres";
        $data['content']='vos_offres';
        $data['header']='utilisateur';
        $this->load->vars($data);
        $this->load->view('template');
    }

}



?>