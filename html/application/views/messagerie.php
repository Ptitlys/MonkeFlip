<!-- favoris / messagerie -->
<nav id="petit_menu" class="row-auto">
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
</nav>


<h1 class="text-center mt-5"> VOS MESSAGES </h1>


<article class="message">
    <?php
            for($i = 0;$i < 6; $i++):  
                    echo '<div class="row lot">';
                    for($j = 0;$j < 6; $j++):
                    //affichage produit et details
                    echo '<a class="col" href=';
                    echo base_url('index.php/Main_controlleur/message');
                    echo '><p id="bulle">ID UTILISATEUR</p>';
                    echo '</a>';
                    endfor;
                    echo '</div>';
            endfor;

            ?>

            
</article>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>

<style>
    #bulle{
        width:100%;
        background-color: #05AFF2;
        border-radius:30px;
        padding: 30px;
    }

    .message{
        margin-top:65px;
        padding-right:10%;
        padding-left:5%;
    }
    </style>