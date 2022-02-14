<?php include "header.php"; ?>
<?php

$titre = $_POST['titre'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$id = $_GET['id'];

bd();
require_once "Article.php"; 
$entry = Article::retrieveByPK($_GET['id']); 

$entry->titre = $titre;
$entry->description = $description;
$entry->prix = $prix;
$entry->save();
echo"<h1>Votre article a été modifier</h1>"
?>
<?php include "footer.php";?>