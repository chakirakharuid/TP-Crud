<?php include "header.php"; ?>

<?php
// Connecter à la base d

bd();
require_once "Article.php";


$entry = Article::retrieveByPK($_GET['id']);

echo $entry->nom;

?>
<?php include "footer.php"; ?>
