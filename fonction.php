<?php

//Je met le processus de connection a ma basse de données dans le fonction
function bd()
{
    $conn = new mysqli('localhost', 'root', 'root');
    if ($conn->connect_error)
        die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

    require "SimpleOrm.class.php";
    SimpleOrm::useConnection($conn, 'chakir');
}

//je creer une fonction pour controller si la personne est bien connecter
function connex(){
    if (isset($_SESSION['user']) == false) {
        echo "Vous devez vous connecté";
       }  

}

