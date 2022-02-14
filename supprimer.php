<?php include "header.php"; ?>

<?php
bd();
require_once "Article.php";
// Variables GET
$id = $_GET['id'];

$entry = Article::retrieveByPK($id);

$entry->delete(); ?>

<h2 style=text-align:center>L' article été supprimé </h2>
<h3 style=text-align:center><a href="index.php">Cliquez sur le lien pour revenir a la page d'acceuil</a></h3>


    <?php include "footer.php"; ?>