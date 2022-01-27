
<!-- Menu panier / favoris / messagerie -->
<nav id="petit_menu" class="row">
    <a class="pr-2" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a class="pl-3 pr-2" href="<?php echo base_url('index.php/Main_controlleur/index') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
</nav>

<h1 id="bienvenue" class="text-center pt-4 pb-5">BIENVENUE SUR MONKEBAY</h1>

<section>
    <h2>Nos recommandations pour vous</h2>

    <article>
        <?php
            for($i = 0;$i < 3; $i++):
                echo '<div class="row mb-5 mt-4">';
                for($j = 0; $j < 6; $j++):
                    echo '<img src=';
                    echo base_url('images/favori.png');
                    echo' id="favori" width="40" height="40"/>';
                    echo '<img id="rectangle" width="230" height="300"/>';
                endfor;
                echo '</div>';
            endfor;
        ?>


    </article>

    <a class="text-center" href="<?php echo base_url('index.php/Main_controlleur/catalogue') ?>"><h3>Retrouver tout le catalogue ici</h3></a>
</section>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>



