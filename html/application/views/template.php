<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $titre?> MONKEBAY</title>

        <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?> " />
    </head>
    <body>
        <!-- chargement header -->
        <header>
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
    padding:10px;
    border-radius:30px;

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

#favori{
    z-index: 1;
    position: relative;
    left:12.9%;
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

</style>

