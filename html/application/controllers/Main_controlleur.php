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

    public function produit(){
        $data['titre']="Produit";
        $data['content']='produit';
        $data['header']='utilisateur';
        $this->load->vars($data);
        $this->load->view('template');
    }
    public function vendeur(){
        $data['titre']="Vendeur";
        $data['content']='vendeur';
        $data['header']='utilisateur';
        $this->load->vars($data);
        $this->load->view('template');
    }

    public function favori(){
        $data['titre']="Page Favoris";
        $data['content']='favori';
        $data['header']='utilisateur';
        $this->load->vars($data);
        $this->load->view('template');
    }

    public function compte(){
        $data['titre']="Compte";
        $data['content']='compte';
        $data['header']='utilisateur';
        $this->load->vars($data);
        $this->load->view('template');
    }

    public function messagerie(){
        $data['titre']="Messagerie";
        $data['content']='messagerie';
        $data['header']='utilisateur';
        $this->load->vars($data);
        $this->load->view('template');
    }

    public function message(){
        $data['titre']="Message";
        $data['content']='message';
        $data['header']='utilisateur';
        $this->load->vars($data);
        $this->load->view('template');
    }


}



?>