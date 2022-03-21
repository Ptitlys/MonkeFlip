
<!-- favoris / messagerie -->
<nav id="petit_menu" class="row-auto">
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
</nav>

<section>

    <article class="pt-5 row justify-content-center">
        <h2 class="col-auto pb-5">*nom du vendeur* - </h2>
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
           
            for ($i=1;$i<$favori;$i++){
                echo '<div class="col-auto note">';
                echo '<img src=';
                echo base_url('images/favori.png');
                echo' width="40" height="40"/>';
                echo '</div>';
            }
            for ($i=0;$i<$mifavori;$i++){
                echo '<div class="col-auto note">';
                echo '<img src=';
                echo base_url('images/mi_favori.png');
                echo'  width="40" height="40"/>';
                echo '</div>';
            }
        ?>
    </article>

    <article>
        <h2 class="pb-5">Commentaires</h2>
        <?php
        echo '<div class="offset-1 row">';
                    for($j = 0;$j < 6; $j++):
                    echo '<img id="commentaire" class="mb-3" width="30" height="200"/>';
                    endfor;
        echo '</div>';
        ?>
    </article>
</section>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>

<style>
    #commentaire{
        background-color: #05AFF2;
        border-radius:20px;
        width:90%;
    }

    .note{
        padding:2px;
    }




</style>




