<?php $this->load->view("modules/head", $head); ?>
<?php
if($this->session->pseudo != null) 
    $this->load->view("modules/menu_co");
else
    $this->load->view("modules/menu_non_co");
?>

<?php $this->load->view("modules/foot"); ?>