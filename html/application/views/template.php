<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $content?> Site films</title>

        <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?> " />
    </head>
    <body>
        <header>
            <?php $this->load->view($header);?>
        </header>

        <article>
            <?php $this->load->view($content);?>
        </article>

<footer>
</footer>

</html>

