<div class="headerbar">
    <div id="col1" class="col">
        <nav class="nav">
            <a class="nav-link" href="<?= base_url('topics'); ?>"><img  class="img-perso" src="<?php echo base_url().'assets/img/topics.png' ?>"/></a>
            <a class="nav-link" href="<?= base_url('histoires-perso'); ?>"><img  class="img-perso" src="<?php echo base_url().'assets/img/histoires.png' ?>"/></a>
        </nav>
    </div>
    <div id="col2" class="col" id="div-img">
        <a class="accueil" href="<?= base_url('accueil'); ?>"><img id="titre-img" class="img-perso" src="<?php echo base_url().'assets/img/titre.png' ?>"/></a>
    </div>
    <div id="col3" class="col">
        <div class="membre" >
            <input type="image" src="<?php echo base_url().'assets/img/connexion.png' ?>" onclick="location.href='connexion'"/>
            <input type="image" src="<?php echo base_url().'assets/img/inscription.png' ?>" onclick="location.href='inscription'"/>
            <!--<input type="image" src="<?php echo base_url().'assets/img/deconnexion.png' ?>" onclick="location.href='deconnexion'"/>-->
        </div>
        <form class="chercher">
            <input id="search" type="search" placeholder="">
            <input type="image" src="<?php echo base_url().'assets/img/chercher.png' ?>"/>
        </form>
    </div>
</div>
