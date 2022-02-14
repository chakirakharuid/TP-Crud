<?php include "header.php"; 

if (!empty($_POST)) {
    // Le titre est-il rempli ?
    if (empty($_POST['titre'])) {
        $message = 'Veuillez indiquer un titre svp !';
    }
    // La déscritpion est-elle rempli ?
    elseif (empty($_POST['description'])) {
        $message = 'Veuillez indiquer une déscription svp !';
        //Le prix est il rempli?
    } elseif (empty($_POST['prix'])) {
$message = 'Veuillez indiquer un prix svp !';
}else{
// Article ajouter
$message = 'Article bien ajouter ';
}
}
bd();
require_once "Article.php";
$article = new Article;
$article->titre = $_POST['titre'];
$article->description = $_POST['description'];
$article->prix = $_POST['prix'];
$article->save();
echo"<h1>Votre article à été ajouter!</h1>"
?>

<?php include "footer.php"?>