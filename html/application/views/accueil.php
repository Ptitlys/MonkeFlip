

<!-- Menu panier / favoris / messagerie -->
<aside>
    <nav>
    <a href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=40></a>
    <a href="<?php echo base_url('index.php/Main_controlleur/index') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=40></a>
    <a href="<?php echo base_url('index.php/Main_controlleur/panier') ?>"><img src='<?php echo base_url('images/Panier.png') ?>' height=40></a>
    </nav>
</aside>

<h1>BIENVENUE SUR MONKEBAY</h1>

<section>
    <h1>Nos recommandations pour vous</h1>

    <article>
        <?php
        echo '<span>';
            for($i = 0;$i < 5; $i++):
                echo '<div class="row justify-content-around mb-5">';
                for($j = 0; $j < 4; $j++):
                    echo '<img src=';
                    echo base_url('images/favori.png');
                    echo' id="favori" width="40" height="40"/>';
                    echo '<img id="rectangle" width="20" height="20"/>';
                endfor;
                echo '</div>';
            endfor;
            echo '</span>';
        ?>


    </article>
</section>

<style>
    #rectangle{
        background-color: blue;
        width: 20%;
        height: 40%;
    }

    #favori{
        position: relative;
        left:20%;
        bottom:10%;
    }



</style>