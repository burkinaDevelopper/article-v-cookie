<?php
function connectToDatabase($servername, $username, $password, $dbname) {
    // Connexion à la base de données MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    } 

    // Retourner l'objet de connexion
    return $conn;
}
?>
