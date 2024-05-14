<?php
include 'Database.php';
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "4ipdw_2023";

// Appel de la fonction de connexion et stockage du résultat dans une variable
$conn = connectToDatabase($servername, $username, $password, $dbname);
?>