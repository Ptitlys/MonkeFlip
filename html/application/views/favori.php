<!-- favoris / messagerie -->
<nav id="petit_menu" class="row-auto">
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
</nav>

<!--Filtre-->
<figure id="filtre">
<img  src='<?php echo base_url('images/filtre.png') ?>' height=55>
</figure>

<h1 class="pt-4 pb-5 titre text-center">VOS FAVORIS</h1>


<article>
        <?php
            for($i = 0;$i < 5; $i++):
                    //affichage produit et details
                    echo '<div class="row align-self-center align-items-center rectangle_favori">';
                        echo '<img class="m-3 col-auto" id="photo" width="100" height="100"/>';

                        echo '<p class="col-auto">Nom de produit</p>';
                        echo '<p class="col-auto">Etat</p>';

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
        border-radius:30px;
        margin-top:5px;
        margin-left:10%;
        margin-right:15%;
        
    }
</style>
