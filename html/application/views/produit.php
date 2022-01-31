<nav id="petit_menu" class="row">
    <a class="pr-2" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a class="pl-3 pr-2" href="<?php echo base_url('index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
</nav>

<section id="bloc"> 
    <article class="row">
        <div class="ml-5">
        </div>
        <div class="ml-5">
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
    <article>
    </article>
</section>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>