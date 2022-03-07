//pierre jouie pannepied

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
}

let createUtilisateur = function(_username, _mail, _localisation, _tel, _note) {
    //_adresse = get metamask adresse
    
    //Appel du contrat pour créer ce nouvel utilisateur dans la blockchain;
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



//let u1 = new Utilisateur("1,2,3,4,5,6"); //classe Utilisateur
  //u1.id;
  