<?php

require_once base_url("vendor/autoload.php");

use Web3\Web3;
use Web3\Contract;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;

$web3 = new Web3(new HttpProvider(new HttpRequestManager("https://data-seed-prebsc-1-s1.binance.org:8545/")));

$eth = $web3->eth;

$eth->blockNumber(function ($err, $data) {
        echo "Latest block number is: ". $data . " \n";
});

$contract = new Contract('https://bsc-dataseed.binance.org/', $abiMonkeFlip);
$contractAddress = "0xedb82daE6814eb93B870251d0981E6949946A93B";
$contract->at($contractAddress)->call("listeUtilisateurs", "0x5D581cf3F42ea1dee1a506b24B806DE06EFabA30", $callback);
print_r($callback);



class Utilisateur{
    private $address;
    private $username;
    private $mail;
    private $localisation;
    private $tel;
    private $nombreAnnonce;
    private $nombreAchats;
   

    function __construct($_address,$_localisation,$_mail,$_tel,$_username){
        $this->address=$_address;
        $this->username=$_username; 
        $this->mail=$_mail;
        $this->localisation=$_localisation;
        $this->tel=$_tel;
        $this->nombreAnnonce="0";
        $this->nombreAchats="0";
    }

    public function getAddress(){
        return $this->address;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getMail(){
        return $this->mail;
    }

    public function getLocalisation(){
        return $this->localisation;
    }

    public function getTel(){
        return $this->tel;
    }

    public function getNbAnnonce(){
        return $this->nombreAnnonce;
    }

    public function getNbAchat(){
        return $this->nombreAchats;
    }
}

/*
class Annonce{
    private $titre;
    private $description;
    private $etat;
    private $prix;
    private $localisation;
    private $modeAcheminement;
    private $urlImage;
    private $user;
    private $vendu;
    private $userVendu;
    private $categorie;

    function __construct($_titre,$_description,$_etat,$_prix,$_localisation,$_modeAcheminement,$_urlImage,$_user,$_vendu,$_userVendu,$_categorie){
        $this->vendu = false;
        $this->titre = $_titre;
        $this->description = $_description;
        $this->etat = $_etat;
        $this->prix = $_prix;
        $this->localisation = $_localisation;
        $this->modeAcheminement = $_modeAcheminement;
        $this->urlImage = $_urImage;
        $this->user = $_user;
        $this->vendu = $_vendu;
        $this->userVendu = $_userVendu;
        $this->categorie = $_categorie;
    }
    public function getVendu(){
        return $this->vendu;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getEtat(){
        return $this->etat;
    }
    public function getPrix(){
        return $this->prix;
    }
    
}jus de thym est pas bo*/
//https://prnt.sc/dD5tAXkdvxn- <= OMG NO FAKE NE PAS CLIQUER

?>