<!-- favoris / messagerie -->
<nav id="petit_menu" class="row-auto">
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
</nav>

<section id="bloc" class="mt-4"> 

    <article class="row">

        <div class="ml-3 col-auto">
            <img id="photo" width="300" height="300"/>
        </div>

        <div class="ml-3 col offset-1">

            <div class="row">
            <h2 class="col">NOM DU PRODUIT</h2>
            <?php
                echo '<img src=';
                echo base_url('images/favori_vide.png');
                echo' class="col-auto" width="40" height="40"/>';
            ?>
            </div>
            
            <p class="row">type vente</p>

            <div class="row">
            <p class="col-3">Prix:XX</p>
            <p class="col-3">Etat</p>
            </div>
           
            <a href="<?php echo base_url('index.php/Main_controlleur/modifier_mon_produit') ?>"><p class="row-auto fond_violet_clair button text-center">Modifier<p></a>
            <p class="row-auto fond_violet_fonce button text-center">Supprimer<p>

        </div>

    </article>

    <article class="ml-2 col-auto mr-2 fond_descrip">
        <p>Lorem ipsum dolor sit amet. Ut delectus dolore rem eaque voluptatem qui libero nostrum ut necessitatibus quia sed amet sapiente eum cupiditate molestiae sed quia earum. Ea enim perferendis ut obcaecati blanditiis est veniam dolorem sit quos natus aut voluptas omnis sit quasi autem. Sed dolor laboriosam quo nihil perferendis aut recusandae unde eos natus numquam ut corporis sunt ea modi minus eum dolorem assumenda.
            A tempore placeat ea libero aperiam eum quos atque ea fugit voluptatem aut dolorem galisum eos officiis magnam aut fuga internos? Sed numquam porro et temporibus velit aut placeat consequatur. Eos sunt voluptas ut excepturi laboriosam aut magnam galisum hic sequi adipisci qui consectetur dolores hic explicabo voluptatibus vel nulla amet. Qui impedit eligendi eum consequatur aliquid eos voluptate excepturi et commodi excepturi.</p>
    </article>

</section>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>