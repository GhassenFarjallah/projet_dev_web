<?php
  include("connexion.php");
  $nomR = $_POST['nom'];
  $prenom = $_POST['prenom1'];
  $Email = $_POST['email'];
  $Téléphone = $_POST['Téléphone'];
  $Message = $_POST['Message'];

  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = "INSERT INTO Email(nom, prenom, Email, Telephone, message) VALUES ('$nomR', '$prenom', '$Email', '$message')";
    // use exec() because no results are returned
    $conn->exec($requete);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo $requete . "<br>" . $e->getMessage();
}

$conn = null;  
?>