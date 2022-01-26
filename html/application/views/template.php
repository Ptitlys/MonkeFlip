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

   body {
       background-color: #3B1273;
       padding-left: 10px;
       padding-right: 10px;
       overflow-x: hidden; 
   }

   h1{
    font-size:2.7em;
    font-family: BungeeShade;
    text-shadow: -0.1em 0.1em #1156A6, 0.1em -0.1em #5C2071;
    margin-top:30px;
}

h2, h1{
    color:#05AFF2;
    }

nav h2{
    font-family: Mina;
    padding-top: 10px;
    text-shadow:
    -1px -1px 0 #1156A6,
    1px -1px 0 #1156A6,
    -1px 1px 0 #1156A6,
    1px 1px 0 #1156A6;

}

h2{
    font-family: NanumGothicCoding;
}

</style>

