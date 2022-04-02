<!-- favoris / messagerie -->
<nav id="petit_menu" class="row-auto">
    <a  class="text-center px-2" href="<?php echo base_url('public/index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('public/images/message.png') ?>' height=55></a>
    <a  class="text-center px-2" href="<?php echo base_url('public/index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('public/images/favori.png') ?>' height=55></a>
</nav>

<h1 class="text-center mt-5"> DISCUSSION AVEC - <a href="<?php echo base_url('public/index.php/Main_controlleur/vendeur') ?>">NOM INTERLOCUTEUR</a> - </h1>

<article class="message">
    <section class="col">

    <textarea class="offset-1" id="send_mess" name="send_mess" rows="5" cols="150">
        Envoyer un message
    </textarea>
    <?php
                    //changement de couleur selon user a faire
                    for($j = 0;$j < 6; $j++):
                    //affichage message
                    echo '<p class ="offset-1" id="bulle_mess">ID UTILISATEUR - MESSAGE</p>';
                    endfor;

            ?>
    </section>

            
</article>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('public/images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>

