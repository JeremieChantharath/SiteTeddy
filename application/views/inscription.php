<?php $this->load->view("modules/head", $head); ?>
<?php
if($this->session->pseudo != null) 
    $this->load->view("modules/menu_co");
else
    $this->load->view("modules/menu_non_co");
?>
<section class="inscription-form">
    <form action="#" method="post">
        <h4>Pseudo</h4>
        <input name="pseudo" type="text">
        <h4>Nom</h4>
        <input name="nom" type="text">
        <h4>Prenom</h4>
        <input name="prenom" type="text">
        <h4>Email</h4>
        <input name="email" type="text">
        <h4>Mot de passe</h4>
        <input name="mdp" type="text">
        <h4>Retaper mot de passe</h4>
        <input name="mdp_conf" type="text"><br>
        <input type="submit" value="Valider">
    </form>
</section>

<?php $this->load->view("modules/foot"); ?>