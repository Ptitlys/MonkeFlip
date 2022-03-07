<!-- favoris / messagerie -->
<nav id="petit_menu" class="row-auto">
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('images/message.png') ?>' height=55></a>
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('images/favori.png') ?>' height=55></a>
</nav>

<section id="bloc" class="mt-4"> 

    <article class="row">

        <div class="ml-3 col offset-1">

            <div class="row text-center">
            <h2 class="col mb-3">NOM DU PRODUIT</h2>
            </div>

            <div class="mb-4 row align-items-start">
                <label class="col-auto">Photo(s) du produit:</label>
                <input class="col-auto" type="file" id="image" name="avatar" accept="image/png, image/jpeg" multiple>

                    <p class="offset-1 col-auto">Type de vente </p>
                    <select class="col-auto" name="typeVente" id="typeVente">
                    <option value="fixe">Prix fixe</option>
                    <option value="enchere">Enchère</option>
                    </select>
            </div>

            

            <div class="mb-4 row align-items-start">

            <p class="col-auto">Prix (ou enchère de départ):</p>
            <input class="col-2" type="number" min="0" id="prix" name="prix" required minlength="1" maxlength="6" size="10" step=".01">
            <p class="col-auto">€</p>
            <p class="offset-2  col-auto">Etat</p>
            <select class="col-auto" name="typeVente" id="typeVente">
                <option value="passable">Passable</option>
                <option value="enEtat">En etat</option>
                <option value="commeNeuf">Comme neuf</option>
                <option value="neuf">Neuf</option>
            </select>
            </div>

            </div>

            <div class="row justify-content-between">
                <p class="offset-1 col-auto">Mot clés: </p>
                <div class="col justify-content-between">
                <!--boucle a faire quand fonction qui ressort toute les catégories-->
                    <select class="col-auto" name="motCle1" id="motCle1">
                    <option value="fixe">Prix fixe</option>
                    <option value="enchere">Enchère</option>
                    </select>

                    <select class="col-auto" name="motCle2" id="motCle2">
                    <option value="fixe">Prix fixe</option>
                    <option value="enchere">Enchère</option>
                    </select>

                    <select class="col-auto" name="motCle3" id="motCle3">
                    <option value="fixe">Prix fixe</option>
                    <option value="enchere">Enchère</option>
                    </select>
                    </div>
                </div>

    </article>


    <p class="col-auto">Description du produit:</p>
    <textarea id="description" class="ml-2 col-auto mr-2" required>
       commentaire ecris avant modif.
    </textarea>


    <div class="row justify-content-around">
        <input class="fond_violet_clair button text-center " type = "button" value = "Annuler"  onclick = "history.back()">

        <input type="submit" value="Valider les modifications" class="fond_violet_fonce button text-center"/>
    </div>

</section>

<aside id="fleche"><a href=#debut><img src='<?php echo base_url('images/fleche.png') ?>' title="fleche" height="60" width="60" /></a></aside>
