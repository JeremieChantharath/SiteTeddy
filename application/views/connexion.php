<?php $this->load->view("modules/head", $head); ?>
<?php
if($this->session->pseudo != null) 
    $this->load->view("modules/menu_co");
else
    $this->load->view("modules/menu_non_co");
?>

<section class="connexion-form">
    <form action="#" method="post">
        <input name="email" type="text" placeholder="email">
        <input name="mdp" type="text" placeholder="mdp">
        <input type="submit" value="Valider">
    </form>
</section>

<?php $this->load->view("modules/foot"); ?>