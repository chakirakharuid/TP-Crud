<?php include "header.php";
?>
<?php
    if (isset($_SESSION['user']) == true) {
        echo "Vous etes déjà connecter";
    }
    ?>
<h1>Connexion</h1>
<form class="formco" method="POST" action="verifco.php">
    <label for="nom">Votre nom</label>
    <input type="text" placeholder="Veuillez entrez votre nom" name="nom" id="nom" /> </br>
    <label for="passeword">Votre mot de passe</label>
    <input type="password" placeholder="Veuillez entrez votre mot de passe" name="passeword"id="passeword" /> <br />
    <input type="submit" value="Connexion !" />
</form>
  <?php include "footer.php"?>
