<!-- Menu panier / favoris / messagerie -->
<nav id="petit_menu" class="row">
    <a class="pr-2 pl-3" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a class="pl-3 pr-2" href="<?php echo base_url('index.php/Main_controlleur/index') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
</nav>

<!--Filtre-->
<figure id="filtre">
<img  src='<?php echo base_url('images/filtre.png') ?>' height=55>
</figure>


<header class="row align-items-center">
<div id="menu_keyword" class="row ml-5">
    <p class="m-3 keyword text-center">mot clé</p>
    <p class="m-3 keyword text-center">mot clé</p>
    <p class="m-3 keyword text-center">mot clé</p>
</div>

<h1 class="pt-4 pb-5 titre text-center col-7">Catalogue</h1>


</header>

<section >
    

    <article>
        <?php
            for($i = 0;$i < 10; $i++):
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

</section>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>