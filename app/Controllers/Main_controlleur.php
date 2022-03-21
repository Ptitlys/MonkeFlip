<?php
namespace App\Controllers;


class Main_controlleur extends BaseController{


    //affiche la page d'accueil
   public function index(){
    $data = ['titre' => "Accueil",
            'content' => "accueil",
            'header' => 'utilisateur'];
        echo view('template', $data);
       
    }

    public function catalogue(){
        $data['titre']="Catalogue";
        $data['content']='catalogue';
        $data['header']='utilisateur';
        echo view('template',$data);
    }

    public function vos_offres(){
        $data['titre']="Vos offres";
        $data['content']='vos_offres';
        $data['header']='utilisateur';
        echo view('template',$data);
    }

    public function produit(){
        $data['titre']="Produit";
        $data['content']='produit';
        $data['header']='utilisateur';
        echo view('template',$data);
    }
    public function vendeur(){
        $data['titre']="Vendeur";
        $data['content']='vendeur';
        $data['header']='utilisateur';
        echo view('template',$data);
    }

    public function favori(){
        $data['titre']="Page Favoris";
        $data['content']='favori';
        $data['header']='utilisateur';
        echo view('template',$data);
    }

    public function compte(){
        $data['titre']="Compte";
        $data['content']='compte';
        $data['header']='utilisateur';
        echo view('template',$data);
    }

    public function messagerie(){
        $data['titre']="Messagerie";
        $data['content']='messagerie';
        $data['header']='utilisateur';
        echo view('template',$data);
    }

    public function message(){
        $data['titre']="Message";
        $data['content']='message';
        $data['header']='utilisateur';
        echo view('template',$data);
    }

    public function mon_produit(){
        $data['titre']="Mon produit";
        $data['content']='mon_produit';
        $data['header']='utilisateur';
        echo view('template',$data);
    }

    public function modifier_mon_produit(){
        $data['titre']="Modifier mon produit";
        $data['content']='modifier_mon_produit';
        $data['header']='utilisateur';
        echo view('template',$data);
    }

    public function ajouter_un_produit(){
        $data['titre']="Ajouter un produit";
        $data['content']='ajouter_un_produit';
        $data['header']='utilisateur';
        echo view('template',$data);
    }


}


?>