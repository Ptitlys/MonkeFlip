
<!-- Menu panier / favoris / messagerie -->
<aside id="petit_menu" class="row">
    <a class="pl-1" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a class="pl-1" href="<?php echo base_url('index.php/Main_controlleur/index') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
    <a class="pl-1" href="<?php echo base_url('index.php/Main_controlleur/panier') ?>"><img src='<?php echo base_url('images/Panier.png') ?>' height=55></a>
</aside>

<h1 class="text-center pt-4 pb-5">BIENVENUE SUR MONKEBAY</h1>

<section>
    <h2>Nos recommandations pour vous</h2>

    <article>
        <?php
            for($i = 0;$i < 3; $i++):
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



<style>


    #rectangle{
        background-color: #05AFF2;
        border-radius:20px;
        margin-left:30px;
    }

    #favori{
        z-index: 1;
        position: relative;
        left:12.9%;
        margin-top:10px;
        margin-left:0;
    }

    #petit_menu{
        margin: 20px 0px;
        position: sticky;
        float: right;
        right: 20px;
        z-index: 1;
        background-color: #5C2071;
        padding:10px;
        border-radius:30px;

    }




</style>