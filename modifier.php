<?php include "header.php"; ?>

<?php

$id = $_GET['id'];

bd();
require_once "Article.php";
$entry = Article::retrieveByPK($_GET['id']);
?>

<h1>Modifiez votre article</h1>
<form class="formajou" method="POST" action="modification.php?id=<?= $entry->id ?>">
    <label for="titre">TITRE</label>
    <input type="text" placeholder="Veuillez entrez un titre" name="titre" id="titre" /> <br />
    <label for="description">DESCRIPTION</label>
    <textarea placeholder="Vous pouvez donner une description de l'article en 5 caractères minimum et 750 caractères maximum" name="description" id="description" rows="15" cols="77" min="5" max="750" required="required"></textarea>
    <br />
    <label for="prix">PRIX</label>
    <input type="text" placeholder="Veuillez entrez un prix" name="prix" id="prix" /> <br />
    <input type="submit" value="Modifiez !" />
</form>

<?php include "footer.php"; ?>