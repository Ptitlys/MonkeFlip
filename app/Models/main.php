<?php

require_once base_url("vendor/autoload.php");

use Web3\Web3;
use Web3\Contract;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;

$web3 = new Web3(new HttpProvider(new HttpRequestManager("https://data-seed-prebsc-1-s1.binance.org:8545/", 10)));
$eth = $web3->eth;


//Adresse du contrat principal, celle qu'on utilisera tout le temps
$monkeContract = "0xcF3Dbc9c2D50D2f56773F7cc8f43828928Ffc5ad";
$adressepj = "0x5D581cf3F42ea1dee1a506b24B806DE06EFabA30";

$abimonke = file_get_contents(base_url("public/abi/MonkeFlip.json"));
$abiuti = file_get_contents(base_url("public/abi/Utilisateur.json"));
$abiannonce = file_get_contents(base_url("public/abi/Annonce.json"));
//Pour tester si ça marche

function test(){
    global $eth, $web3;
    $eth = $GLOBALS["eth"];
    $eth->blockNumber(function ($err, $data) {
            echo "Latest block number is: ". $data . " \n";
    });
}
test();
/*

//Fonction basique de callback qu'on doit mettre à la fin des appels blockchain, c'est là dedans que y'a les résultats
function callback($err, $transaction) {
    if ($err == null) print_r($transaction[0]);
    else return $err;
}

//Permet à partir d'une adresse blockchain de retrouver l'adresse de son compte (contrat) d'Utilisateur
function getUti($adresseUti) {
    global $web3, $eth, $monkeContract, $abimonke;
    $contract = new Contract($web3->provider, $abimonke);
    $contract->at($monkeContract)->call("listeUtilisateurs",$adresseUti,function($err, $data) {
        if ($err != null) echo "Erreur";
        else {
            return $data;
        }
        
    });
}

//Fonction qui permet de transformer un entier en eth et inversement

function toEth($reel) {
    return $reel * 1000000000000000000;
}

function ethTo($eth) {
    $eth=intval($eth->toString());
    return $eth / (1000000000000000000);
}
//Permet à partir d'une adrese de contrat utilisateur de get le nom;
/*
echo "Les chiens me font peur parce que : ";
echo getUti("0x5D581cf3F42ea1dee1a506b24B806DE06EFabA30");
echo " Mal au couilles";

class Utilisateur{
    
    private $address;
    private $username;
    private $mail;
    private $localisation;
    private $tel;
    private $nombreAnnonce;
    private $nombreAchats;
   

    function __construct($_address,$_localisation,$_mail,$_tel,$_username, $_nombreAnnonce, $_nombreAchats){
        $this->address=$_address;
        $this->username=$_username; 
        $this->mail=$_mail;
        $this->localisation=$_localisation;
        $this->tel=$_tel;
        $this->nombreAnnonce=$_nombreAnnonce;
        $this->nombreAchats=$_nombreAchats;
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

function importUti($adresseUti) {

    global $web3, $eth, $monkeContract, $abimonke, $abiuti;

    $contractMonke = new Contract($web3->provider, $abimonke);

    $_uti = null;
    $contractMonke->at($monkeContract)->call("listeUtilisateurs",$adresseUti,function($err, $data) use (&$_uti){
        if ($err != null) echo $err;
        else {
            global $web3, $eth, $monkeContract, $abimonke, $abiuti;
            $contractUti = new Contract($web3->provider, $abiuti);

            $_adress = "";
            $_username = "";
            $_mail = "";
            $_localisation = "";
            $_tel = "";
            $_nombreAnnonce = "";
            $_nombreAchats = "";

            $contractUti->at($data[0])->call("adress", function($err, $data1) use (&$_adress){
                $_adress = $data1[0];
            });
            $contractUti->at($data[0])->call("username", function($err, $data1) use (&$_username){
                $_username = $data1[0];
            });
            $contractUti->at($data[0])->call("mail", function($err, $data1) use (&$_mail){
                $_mail = $data1[0];
            });
            $contractUti->at($data[0])->call("localisation", function($err, $data1) use (&$_localisation){
                $_localisation = $data1[0];
            });
            $contractUti->at($data[0])->call("tel", function($err, $data1) use (&$_tel){
                $_tel = $data1[0];
            });
            $contractUti->at($data[0])->call("nombreAnnonce", function($err, $data1) use (&$_nombreAnnonce){
                $_nombreAnnonce = $data1[0];
            });
            $contractUti->at($data[0])->call("nombreAchats", function($err, $data1) use (&$_nombreAchats){
                $_nombreAchats = $data1[0];
            });
        }
        $_uti = new Utilisateur($_adress,$_localisation,$_mail,$_tel,$_username, $_nombreAnnonce, $_nombreAchats);
    });
    return $_uti;
}
/*
$outi = importUti("0x5D581cf3F42ea1dee1a506b24B806DE06EFabA30");
echo $outi->getUsername();
echo $outi->getNbAnnonce();


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
        $this->titre = $_titre;
        $this->description = $_description;
        $this->etat = $_etat;
        $this->prix = $_prix;
        $this->localisation = $_localisation;
        $this->modeAcheminement = $_modeAcheminement;
        $this->urlImage = $_urlImage;
        $this->user = $_user;
        $this->vendu = $_vendu;
        $this->userVendu = $_userVendu;
        $this->categorie = $_categorie;
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
        return ($this->prix);
    }
    public function getPrixEth() {
        return ethTo($this->prix);
    }
    public function getLocalisation() {
        return $this->localisation;
    }
    public function getModeAcheminement() {
        return $this->modeAcheminement;
    }
    public function getUrlImage() {
        return $this->urlImage;
    }
    public function getUser() {
        return $this->user;
    }
    public function getVendu(){
        return $this->vendu;
    }
    public function getUserVendu() {
        return $this->userVendu;
    }
    public function getCategorie() {
        return $this->categorie;
    }
    public function toString() {
        return "Titre : ".$this->titre."\nDecription : ".$this->description."\nEtat : ".$this->etat."\nPrix : ".$this->getPrixEth()."\nLocalisation : ".$this->localisation."\nAcheminement : ".$this->modeAcheminement."\nCategorie : ".$this->categorie;
    }
}

function importAnnonce($adresseUti, $nbAnnonce) {

    global $web3, $eth, $monkeContract, $abimonke, $abiannonce, $abiuti;

    $contractMonke = new Contract($web3->provider, $abimonke);

    $_annonce = null;
    $contractMonke->at($monkeContract)->call("listeAnnonces",$adresseUti, $nbAnnonce, function($err, $data) use (&$_annonce){
        if ($err != null) echo $err;
        else {
            global $web3, $eth, $monkeContract, $abimonke, $abiannonce, $abiuti;
            $contractUti = new Contract($web3->provider, $abiannonce);

            $_annonce = null;
            $_titre = "";
            $_description= "";
            $_etat = "";
            $_prix = "";
            $_localisation = "";
            $_modeAcheminement = "";
            $_urlImage = "";
            $_user = "";
            $_vendu = "";
            $_userVendu = "";
            $_categorie = "";

            $contractUti->at($data[0])->call("titre", function($err, $data1) use (&$_titre){
                $_titre = $data1[0];
            });
            $contractUti->at($data[0])->call("description", function($err, $data1) use (&$_description){
                $_description = $data1[0];
            });
            $contractUti->at($data[0])->call("etat", function($err, $data1) use (&$_etat){
                $_etat = $data1[0];
            });
            $contractUti->at($data[0])->call("prix", function($err, $data1) use (&$_prix){
                $_prix = $data1[0];
            });
            $contractUti->at($data[0])->call("localisation", function($err, $data1) use (&$_localisation){
                $_localisation = $data1[0];
            });
            $contractUti->at($data[0])->call("modeAcheminement", function($err, $data1) use (&$_modeAcheminement){
                $_modeAcheminement = $data1[0];
            });
            $contractUti->at($data[0])->call("urlImage", function($err, $data1) use (&$_urlImage){
                $_urlImage = $data1[0];
            });
            $contractUti->at($data[0])->call("user", function($err, $data1) use (&$_user){
                $_user = $data1[0];
            });
            $contractUti->at($data[0])->call("vendu", function($err, $data1) use (&$_vendu){
                $_vendu = $data1[0];
            });
            $contractUti->at($data[0])->call("userVendu", function($err, $data1) use (&$_userVendu){
                $_userVendu = $data1[0];
            });
            $contractUti->at($data[0])->call("categorie", function($err, $data1) use (&$_categorie){
                $_categorie = $data1[0];
            });

            $_annonce = new Annonce($_titre,$_description,$_etat,$_prix,$_localisation,$_modeAcheminement,$_urlImage,$_user,$_vendu,$_userVendu,$_categorie);
        }   
    });
    return $_annonce;
}

$annonce = importAnnonce($adressepj, 1);
echo $annonce->toString();
function importHistoriqueAchats($adresseuti, $nbannonce) {
    global $web3, $eth, $monkeContract, $abimonke;
    $_annonce = null;
    $contract = new Contract($web3->provider, $abimonke);
    $contract->at($monkeContract)->call("listeHistoriqueAchat",$adresseuti, $nbannonce,function($err, $data) use(&$_annonce){
        if ($err != null) echo "Erreur";
        else {
            $_annonce = $data;
        }
    });
}

//https://prnt.sc/dD5tAXkdvxn- <= OMG NO FAKE NE PAS CLIQUER

*/
?>