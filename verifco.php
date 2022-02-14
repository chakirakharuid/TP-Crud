<?php
require "header.php";
//Je me connecte à ma basse de données avec ma fonction
bd();
//je fais appelle a ma classe Utilisateur 
require_once "Utilisateur.php";
//Je met les valeurs POST dans des variables
$nom = $_POST['nom'];
$pwd = $_POST['passeword'];
//Je récupére l'utilisateur avec le nom by POST
$entry = Utilisateur::retrieveByNom($_POST['nom'], SimpleOrm::FETCH_ONE);
//je fais un controle pour dire que si le nom entrer n'est pas enregistrer dans ma bd on arrete tous
if ($entry == null) {
    die("Stop : le nom entré n'est pas en base ... ! ");
}
// J'enferme mes valeurs de basse de donner dans des variables
$nom_bd = $entry->nom;
$pwd_bd = $entry->passeword;
// Je fais comparer les valeurs entrer et les valeurs de ma bd pour autoriser la connexion ou non
if (($nom == $nom_bd) && ($pwd == $pwd_bd)) {
    echo "Vous êtes connecté avec le nom ". $nom_bd;
    $_SESSION['user'] = $nom;
} else {
    echo "Vous n'êtes pas connecté. Veuillez vous reconnectez !";
}
?>
<p style="text-align: center;">Vous pouvez ajouter,modifiez ou supprimer un article avec le lien  <a href="ajouter.php">ici</a></p>
<?php include "footer.php"; ?>