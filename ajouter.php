<?php include "header.php" ?>
<?php connex(); ?>

<div class="texte">
    <h1>Ajouter votre article</h1>
    <p>Pour modifier ou supprimer un article cliquer sur le lien <a href="liste_des_articles.php">Liste des Articles </a></p>
</div>
<form class="formajou" method="POST" action="verifarticle.php">
    <label for="titre">TITRE</label>
    <input type="text" placeholder="Veuillez entrez un titre" name="titre" id="titre" /> <br />
    <label for="description">DESCRIPTION</label>
    <textarea placeholder="Vous pouvez donner une description de l'article en 5 caractères minimum et 750 caractères maximum" name="description" id="description" rows="15" cols="77" min="5" max="750" required="required"></textarea>
    <br />
    <label for="prix">PRIX</label>
    <input type="text" placeholder="Veuillez entrez un prix" name="prix" id="prix" min="30" max="10000"/> <br />
    <input type="submit" value="Ajoutez !" />
</form>

<?php include "footer.php"; ?>