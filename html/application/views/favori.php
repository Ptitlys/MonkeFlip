<!-- favoris / messagerie -->
<nav id="petit_menu" class="row">
    <a class="pr-2 pl-3" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a class="pl-3 pr-2" href="<?php echo base_url('index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
</nav>

<!--Filtre-->
<figure id="filtre">
<img  src='<?php echo base_url('images/filtre.png') ?>' height=55>
</figure>

<h1 class="pt-4 pb-5 titre text-center">VOS FAVORIS</h1>


<article class="container">
        <?php
            for($i = 0;$i < 5; $i++):
                echo '<div class="col rectangle_favori">';
                    //affichage produit et details
                    echo '<div class="row">';
                        echo '<img class="m-3 col-3" id="photo" width="100" height="100"/>';

                        echo '<p>Nom de produit</p>';
                        echo '<p>Etat</p>';

                    echo '</div>';
                echo '</div>';
            endfor;
        ?>


    </article>

    <a class="text-center" href="<?php echo base_url('index.php/Main_controlleur/catalogue') ?>"><h3>Retrouver tout le catalogue ici</h3></a>
</section>


<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>

<style>
    .rectangle_favori{
        background-color:#05AFF2;
        width: 90vw;
        height: 25vh;
        margin: 3px 0px;
        border-radius:30px;
    }
</style>
