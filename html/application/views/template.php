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
        <article>
            <?php $this->load->view($content);?>
        </article>

        <footer>
        </footer>
    </body>

</html>

