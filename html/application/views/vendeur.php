
<!-- Menu panier / favoris / messagerie -->
<nav id="petit_menu" class="row">
    <a class="pr-2" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a class="pl-3 pr-2" href="<?php echo base_url('index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
</nav>

<h1 id="bienvenue" class="text-center pt-4 pb-5">*nom du vendeur*</h1>

<section>
    <h2>Nos recommandations pour vous</h2>

    <article>
        <?php
            $noteV=9;
            $mifavori=$noteV%2;
            function euclidivision($nombre , $diviseur){ 
                $nombre = intval($nombre)+0; 
                  $diviseur = intval($diviseur)+0; 
                 
                  if ($diviseur == 0){ return array();} 
                  if ($nombre == 0){ return array($nombre, $diviseur);} 
                  
                  $quotient = floor($nombre/$diviseur); 
                  $reste = $nombre - $quotient*$diviseur; 
                  
                  if ($reste < 0){ 
                  if ($diviseur > 0){ 
                  $quotient--; 
                  $reste += $diviseur; 
                  } else { 
                  $quotient++; 
                  $reste -= $diviseur; 
                  } 
                  }  
                  return array($quotient, $reste); 
               }
            $favori=$noteV/2;
            for ($i=0;$i<$favori;$i++){
                echo '<img src=';
                echo base_url('images/favori.png');
                echo' width="40" height="40"/>';
            }
            for ($i=0;$i<$mifavori;$i++){
                echo '<img src=';
                echo base_url('images/mi_favori.png');
                echo'  width="40" height="40"/>';
            }
            
            /*for($i = 0;$i < 3; $i++):
                echo '<div class="row mb-5 mt-4">';
                for($j = 0; $j < 6; $j++):
                    echo '<img src=';
                    echo base_url('images/favori.png');
                    echo' id="favori" width="40" height="40"/>';
                    //affichage produit et details
                    echo '<a href=';
                    echo base_url('index.php/Main_controlleur/produit');
                    echo '><img id="rectangle" width="230" height="300"/>';
                    echo '</a>';
                endfor;
                echo '</div>';
            endfor;*/
        ?>


    </article>

    <a class="text-center" href="<?php echo base_url('index.php/Main_controlleur/catalogue') ?>"><h3>Retrouver tout le catalogue ici</h3></a>
</section>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>



