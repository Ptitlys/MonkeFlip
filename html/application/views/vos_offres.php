<!-- Menu graphe / favoris / messagerie -->
<nav id="petit_menu_vertical" class="">
    <a class="row mb-4" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a class="row mb-4" href="<?php echo base_url('index.php/Main_controlleur/index') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
    <a class="row mb-4" href="<?php echo base_url('index.php/Main_controlleur/statistiques') ?>"><img src='<?php echo base_url('images/graphe.png') ?>' height=55></a>
</nav>

<!--Filtre-->
<figure id="filtre">
<img  src='<?php echo base_url('images/filtre.png') ?>' height=55>
</figure>



<h1 class="pt-4 pb-5 titre text-center col-7">Vos Offres</h1>

<section id="bloc"> 
    <article id="offresEnCours">
    <h2>- Offres en cours</h2>
        <div id="enchere" class="ml-5">
            <h2>- Enchere</h2>
            <?php for($i = 0;$i < 2; $i++):
                echo '<div class=" sous-bloc row align-items-center">';
                    echo '<img class="m-3" id="photo" width="100" height="100"/>';
                    echo '<p class="pl-5 pr-5">Prix</p>';
                    echo '<p class="pl-5">Nom produit</p>';
                echo '</div>';
            endfor;
                ?>
        </div>
        <div id="fixe" class="ml-5">
        <h2>- Prix fixe</h2>
        <?php for($i = 0;$i < 2; $i++):
                echo '<div class="sous-bloc row">';
                    echo '<img class="m-3" id="photo" width="100" height="100"/>';
                    echo '<p>Prix</p>';
                    echo '<p>Nom produit</p>';
                echo '</div>';
            endfor;
                ?>
        </div>
    </article>
    <article id="offresFinies">
    <h2>+ Offres finies</h2>
    </article>

</section>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>


<style>
    #bloc{
        background-color: #05AFF2;
        border-radius:30px;
        margin-left:10%;
        margin-right:15%;
        padding:2%
    }

    #photo{
        background-color: white;
    }

    #bloc h2{
        color: #05F2DB;
        font-weight:bold;
    }

    .sous-bloc{
        background-color: #05F2DB;
        border-radius:30px;
        margin: 2% 0;
        padding: 1.5% 1.2%;
        color: white;
    }


    
</style>