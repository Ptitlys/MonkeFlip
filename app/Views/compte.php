<!-- favoris / messagerie -->
<nav id="petit_menu" class="row-auto">
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/messagerie') ?>"><img src='<?php echo base_url('public/images/message.png') ?>' height=55></a>
    <a  class="text-center px-2" href="<?php echo base_url('index.php/Main_controlleur/favori') ?>"><img src='<?php echo base_url('public/images/favori.png') ?>' height=55></a>
</nav>


<h1 class="pt-4 pb-5 titre text-center">Votre Compte - ID</h1>

<a href="<?php echo base_url('public/index.php/Main_controlleur/vos_offres') ?>"><h2>Vos offres</h2></a>

<?php $this->someModel = model('main'); ?>

<h2>Votre historique d'achat</h2>