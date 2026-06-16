<?php
/* Connexion à la bdd*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yearbook";

/* Création de la connexion */
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  /* Set connection attributes */
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

/* Vérification de la connexion */
catch (Exception $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

?>