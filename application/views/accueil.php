<?php $this->load->view("modules/head", $head); ?>
<?php
if($this->session->pseudo != null) 
    $this->load->view("modules/menu_co");
else
    $this->load->view("modules/menu_non_co");
?>

<div id="bienvenue" class="bienvenue">
    <img class="img-perso" src="<?php echo base_url().'assets/img/bienvenue.png' ?>" alt="titre"/>
    <p id="presentation">Bla bla bla</p>
</div>

<?php $this->load->view("histoires_genres"); ?>

<?php $this->load->view("modules/foot"); ?>