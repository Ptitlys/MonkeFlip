//pierre jouie pannepied
import React, { Component } from 'react';
import Web3 from 'web3';

class Utilisateur{
    constructor(_adresse, _username, _mail, _localisation, _tel, _note, _nombreAnnonce){
    this.adresse=_adresse;
    this.username=_username;
    this.mail=_mail;
    this.localisation=_localisation;
    this.tel=_tel;
    this.note=_note
    this.nombreAnnonce=_nombreAnnonce;
    this.nombreAchats = _nombreAchats
    }
    getAdresse(){
        return this.adresse;
    } 
    getUsername(){
        return this.username;
    }
    getMail(){
        return this.mail;
    }
    getLocalisation(){
        return this.localisation;
    }
    getTel(){
        return this.tel;
    }
    getNote(){
        return this.note;
    }
    getNombreAnnonce(){
        return this.nombreAnnonce
    }
    getNbrAchats(){
        return this.nombreAchats;
    }

    async componentWillMount(){
        await this.loadWeb3()
        //await this.LoadBlockChainData()
      }
    
      async loadWeb3(){
        if (window.ethereum) {
          window.web3 = new Web3(window.ethereum);
          await window.ethereum.enable()
        }
        else if (window.web3) {
          window.web3 = new Web3(window.web3.currentProvider);
        }
        else {
          window.alert('Non-Ethereum browser detected. You should consider trying MetaMask!');
        }
    }

    async LoadBlockChainData() {
    const web3 = window.web3;
    const accounts = await web3.eth.getAccounts()
    const networkId = await web3.eth.net.getId()
    const networkData = Marketplace.networks[networkId]
    if(networkData){
      const monkeflip = web3.eth.Contract(MonkeFlip.abi, 0xedb82dae6814eb93b870251d0981e6949946a93b)
      const utilisateur = web3.eth.Contract(Utilisateur.abi, 0xedb82dae6814eb93b870251d0981e6949946a93b)
      const annonce = web3.eth.Contract(Annonce.abi, 0xedb82dae6814eb93b870251d0981e6949946a93b)

      const productCount = await marketplace.methods.productCount().call()
      // load products
      for(var i = 1; i <= productCount; i++){
        const product = await marketplace.methods.products(i).call()
        //this.setState({
          //products: [...this.state.products, product]
        //})
      }
      //this.setState({ loading : false })
    } else {
      window.alert("Marketplace not deployed to detected network")
    }
  }
    //envoyer message
    envoyerMessage = function(_to,_message){
      monkeflip.methods.envoyerMessage(_to, _message).send();
    }
}

let createUtilisateur = function(_localisation, _mail,  _tel, _username) {
    //_adresse = get metamask adresse
    const marketplace = web3.eth.Contract(Marketplace.abi, 0xedb82dae6814eb93b870251d0981e6949946a93b)
    const accounts = await web3.eth.getAccounts()
    let _adress = accounts[0]
    ma
    //Appel du contrat pour creer ce nouvel utilisateur dans la blockchain;
}

class Annonce{
    constructor(_titre,_description,_etat,_prix,_localisation,_modeAcheminement,_urlImage,_user,_categorie,_userVendu){
        this.user=_user;
        this.titre=_titre;
        this.description=_description;
        this.etat=_etat;
        this.prix=_prix;
        this.modeAcheminement=_modeAcheminement;
        this.localisation=_localisation;
        this.urlImage=_urlImage;
        this.categorie=_categorie;
        this.vendu=false;
        this.userVendu=_userVendu
    }
    getUser(){
        return this.user;
    }
    getTitre(){
        return this.titre;
    }
    getDescription(){
        return this.description;
    }
    getEtat(){
        return this.etat;
    }
    getPrix(){
        return this.prix;
    }
    getModeAcheminement(){
        return this.getModeAcheminement;
    }
    getLocation(){
        return this.localisation;
    }
    getUrlImage(){
        return this.urlImage;
    }
    getCategorie(){
        return this.categorie;
    }
    getVendue(){
        return this.vendu;
    }
    getUserVendu(){
        return this.userVendu;
    }
}

let getInfoUti = function(addresse) {
    
}

let ajouterProduit = function(form, addresse) {
    let utiActuel = getInfoUti(addresse);
    var titre=document.getElementById('ajoutproduit').nom.value;
    var urlImage=document.getElementById('ajoutproduit').image.value;
    var typevente=document.getElementById('ajoutproduit').typevente.value;
    var prix=document.getElementById('ajoutproduit').prix.value;
    var etat=document.getElementById('ajoutproduit').etat.value;
    var description = document.getElementById('ajoutproduit').description.value;
    
    return true;
    this.user=_user;
    this.description=_description;
    this.modeAcheminement=_modeAcheminement;
    this.localisation=_localisation;
    this.urlImage=_urlImage;
    this.categorie=_categorie;
    this.vendu=false;
    this.userVendu=_userVendu;
}

let modifierProduit = function(form, addresse) {
    let utiActuel = getInfoUti(addresse);
    var urlImage=document.getElementById('ajoutproduit').image.value;
    var typevente=document.getElementById('ajoutproduit').typevente.value;
    var prix=document.getElementById('ajoutproduit').prix.value;
    var etat=document.getElementById('ajoutproduit').etat.value;
    var description = document.getElementById('ajoutproduit').description.value;
    
    return true;
    this.user=_user;
    this.description=_description;
    this.modeAcheminement=_modeAcheminement;
    this.localisation=_localisation;
    this.urlImage=_urlImage;
    this.categorie=_categorie;
    this.vendu=false;
    this.userVendu=_userVendu
}


//let u1 = new Utilisateur("1,2,3,4,5,6"); //classe Utilisateur
  //u1.id;


