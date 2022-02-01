<!-- favoris / messagerie -->
<nav id="petit_menu" class="row-auto">
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
</nav>

<!--Filtre-->
<figure id="filtre">
<img  src='<?php echo base_url('images/filtre.png') ?>' height=55>
</figure>


<header class="row-auto">
<div class="row ml-5 align-items-center">
    <p class="m-3 keyword text-center col-auto">mot clé</p>
    <p class="m-3 keyword text-center col-auto">mot clé</p>
    <p class="m-3 keyword text-center col-auto">mot clé</p>
    <h1 class="pt-4 pb-5 titre text-center col-7">Catalogue</h1>
</div>




</header>

<section >
    

<article class="container-fluid">
        <?php
       
            for($i = 0;$i < 5; $i++):
                echo '<div class="row rmb-5 mt-4">';
                    for($j = 0;$j < 6; $j++):
                    echo '<div class="col-auto" id="article">';
                    echo '<img src=';
                    echo base_url('images/favori.png');
                    echo' id="favori" width="40" height="40"/>';

                    //affichage produit et details
                    echo '<a href=';
                    echo base_url('index.php/Main_controlleur/produit');
                    echo '><img id="rectangle" width="230" height="300"/>';
                    echo '</a>';
                    echo '</div>';
                endfor;
                echo '</div>';
            endfor;
            
        ?>

</section>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>