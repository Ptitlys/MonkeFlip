<!-- Menu graphe / favoris / messagerie -->
<nav id="petit_menu_vertical" class="col-auto">
    <a class="row mb-2" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a class="row mb-2" href="<?php echo base_url('index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
    <a class="row mb-2" href="<?php echo base_url('index.php/Main_controlleur/statistiques') ?>"><img src='<?php echo base_url('images/graphe.png') ?>' height=55></a>
</nav>

<!--Filtre-->
<figure id="filtre">
<img src='<?php echo base_url('images/plus.png') ?>' height=55>
</figure>



<h1 class="pt-4 pb-5 titre text-center">VOS OFFRES</h1>

<section id="bloc"> 
    <article id="offresEnCours">
    <h2>- Offres en cours</h2>
        <div id="enchere" class="ml-5">
            <h2>- Enchere</h2>
            <?php for($i = 0;$i < 2; $i++):
            echo '<a href=';
            echo base_url('index.php/Main_controlleur/produit');
                echo '><div class=" sous-bloc row align-items-center">';
                    echo '<img class="m-3 col-auto" id="photo" width="100" height="100"/>';
                    echo '<p class="pl-5 pr-5 col-auto">Prix</p>';
                    echo '<p class="pl-5 col-auto">Nom produit</p>';
                echo '</div>';
                echo'</a>';
            endfor;
                ?>
        </div>
        <div class="ml-5">
        <h2>- Prix fixe</h2>
        <?php for($i = 0;$i < 2; $i++):
                echo '<a href=';
                echo base_url('index.php/Main_controlleur/produit');
                echo '><div class="sous-bloc row align-items-center">';
                    echo '<img class="m-3 col-auto" id="photo" width="100" height="100"/>';
                    echo '<p class="col-auto" >Prix</p>';
                    echo '<p class="col-auto">Nom produit</p>';
                echo '</div>';
                echo'</a>';
            endfor;
                ?>
        </div>
    </article>
    <article id="offresFinies">
    <h2>+ Offres finies</h2>
    </article>

</section>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>


