<?php include "header.php"; ?>
<?php
//je supprime la session avec le nom
unset($_SESSION['user']);
?>
<h2 style="text-align: center;">Vous êtes deconnecté...</h2>
<?php include "footer.php"; ?>