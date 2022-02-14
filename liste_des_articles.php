<?php include "header.php"; ?>

<?php

bd();
require_once "Article.php";

// recuperer l ensemble des données des utilisateurs
$entry = Article::all();
?>
<div class="liste">
  <?php
  foreach ($entry as $monarticle) {
    echo "<a  href='unarticle.php?id=" . $monarticle->id . "'> $monarticle->titre $monarticle->description </a>
    
    
    
  <button > <a style=text-decoration:none;color:green; href='modifier.php?id=" . $monarticle->id . "'>Modifier</a></button>
    
    
   <button> <a  style=text-decoration:none;color:green;  href='supprimer.php?id=" . $monarticle->id . "'>Supprimer</a></button><hr>";
  }
  ?>
</div>
<?php include "footer.php"; ?>