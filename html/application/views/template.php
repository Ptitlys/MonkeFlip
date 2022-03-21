<!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $titre?> MONKEBAY</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?> " />
        <script type="module" src="<?php echo base_url("js/main.js");?>"></script>

    </head>
    
    <body class="container-fluid">

        <!-- chargement header -->
        <header >
            <?php $this->load->view($header);?>
        </header>

        <!-- chargement content -->
        
        <?php $this->load->view($content);?>
        

        <footer>
        </footer>
    </body>

</html>

<style>
    @font-face {
    font-family: 'BungeeShade';
    src: url('<?php echo base_url('polices/bungeeshade-regular-webfont.woff2') ?>') format('woff2'),
         url('<?php echo base_url('polices/bungeeshade-regular-webfont.woff') ?>') format('woff');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'Mina';
    src: url('<?php echo base_url('polices/Mina-Regular.ttf') ?>') format('truetype');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'NanumGothicCoding';
    src: url('<?php echo base_url('polices/NanumGothicCoding-Regular.ttf') ?>') format('truetype');
    font-weight: normal;
    font-style: normal;

}

#petit_menu_vertical{
        margin: 35px 20px;
        position: sticky;
        top: 10px;
        float: right;
        right: 20px;
        z-index: 1;
        background-color: #5C2071;
        border-radius:30px;
        padding:20px;
    }



.keyword{
    font-family: 'Mina';
    color:black;
    font-weight: bold;
    font-size:1.2em;
    background-color: #05AFF2;
    border-radius:10px;
    padding:5px;
}

html{
    scroll-behavior: smooth;
}

body{
    color:white;
}

#menu{
    background-color:#5C2071;
    box-shadow: 10px 5px 5px #401C8C;
        
}

#petit_menu{
    margin: 35px 20px;
    position: sticky;
    top: 10px;
    float: right;
    right: 20px;
    z-index: 2;
    background-color: #5C2071;

    border-radius:30px;
    padding: 10px;

}

body {
    background-color: #3B1273;
    padding-left: 10px;
    padding-right: 10px;
    overflow-x: hidden; 
}

#bienvenue{
    font-size:2.7em;
    font-family: BungeeShade;
    text-shadow: -0.1em 0.1em #1156A6, 0.1em -0.1em #5C2071;
    margin-top:30px;
}

h2, h1{
    color:#05AFF2;
    
    }

.titre{
    margin-top: 10px;
}

nav h2{
    font-family: Mina;
    padding-top: 10px;
    text-shadow:
    -2px -2px 0 #3B1273,
    2px -2px 0 #3B1273,
    -2px 2px 0 #3B1273,
    2px 2px 0 #3B1273;

}

h2{
    font-family: NanumGothicCoding;
}

#fleche{
    position: sticky;
    bottom: 10px;
    z-index: 2;
    float: right;
}

#rectangle{
    background-color: #05AFF2;
    border-radius:20px;
    margin-left:30px;
}

#article, #bloc{
        position: relative;
    }

#favori{
    z-index: 1;
    position: absolute;
    right:10%;
    margin-top:10px;
    margin-left:0;
}

#filtre{
    background-color: #5C2071;
    border-radius:30px;
    z-index: 2;
    position: sticky;
    top: 10px;
    margin: 30px 20px;
    padding: 10px;
    float: left;

}

#bloc{
        background-color: #05AFF2;
        border-radius:30px;
        margin-left:10%;
        margin-right:15%;
        padding:2%
    }

    #photo{
        background-color: white;
        margin-left:20px;
    }

    /*Page Offres*/
    #bloc h2{
        color: #70FFF1;
        font-weight:bold;
    }

    .sous-bloc p{
        color:#05AFF2;
    }

    .sous-bloc{
        background-color: #70FFF1;
        border-radius:30px;
        margin: 2% 0;
        padding: 1.5% 1.2%;
        color: white;
    }

    /*Page Message*/

    #bulle_mess, 
    #send_mess{
    width:80%;
    background-color: #05AFF2;
    border-radius:30px;
    padding: 30px;
}

#send_mess{
    background-color: #5D5EC2;
    margin-bottom:30px;
    color:white;

    
}

    #bulle{
        width:100%;
        background-color: #05AFF2;
        border-radius:30px;
        padding: 30px;
        color:white;
    }

    .message{
        margin-top:65px;
        padding-right:10%;
        padding-left:5%;
    }

    .fond_descrip{
        margin-top: 20px;
        padding: 5px 30px;
        background-color: #0084B8;
        border-radius:30px;
}



.button{
    width:40%;
    border-radius:80px;
    padding:20px;
    color:white;
    border: 1.5px solid white;
}

/*Page ajouter produit et modif produit*/
#description{
        width:100%;
        height:200px;
    }

    .custom-form{
        background-color:white;

    }

.fond_violet_fonce{
    background-color:#74308B;
}

.fond_violet_clair{
    background-color: #5D5EC2;
}

a{
    text-decoration:none;
}





</style>

