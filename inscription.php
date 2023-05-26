<?php

  include("connexion.php");
  $nomR = $_POST['nom'];
  $prenom = $_POST['prenom1'];
  $Email = $_POST['email'];
  $Num_nom_rue = $_POST['num_nom_rue'];
  $Appartement_suite_unité = $_POST['Appartement'];
  $Ville = $_POST['Ville'];
  $Région_département = $_POST['Région'];
  $Pays_région = $_POST['Pays'];
  $Code_postal = $_POST['CodePostal'];
  $Téléphone = $_POST['Téléphone'];
  $Montant_don_Online = $_POST['montant'];
  $Remarque = $_POST['message'];
  
  // Verify name contains alphabet
  $errors = false;

  if (!preg_match("/^[a-zA-Z]*$/", $nomR)) {
      echo "<br>Format nom invalide. Seulement les lettres de l'alphabet autorisé<br>";
      $errors = true;
  }
  
  if (!preg_match("/^[a-zA-Z]*$/", $prenom)) {
      echo "<br>Format prenom invalide. Seulement les lettres de l'alphabet autorisés<br>";
      $errors = true;
  }
  // Verify email with @gmail.com or @yahoo.fr or @yahoo.com 
  if (!filter_var($Email, FILTER_VALIDATE_EMAIL) || !preg_match("/@(gmail\.com|yahoo\.(fr|com))$/i", $Email)) {
      echo "<br>Invalid email format. Only emails with @gmail.com or @yahoo.fr or @yahoo.com are allowed.";
      $errors = true;
  }

  // Verify phone number contains only numbers and has a length of 8 digits
if (!preg_match("/^[0-9]{8}$/", $Téléphone)) {
    echo "<br>Format numéro de téléphone invalide. Veuillez saisir un numéro de téléphone de 8 chiffres.<br>";
    $errors = true;
}

// Verify postal code contains only 4 digits
if (!preg_match("/^[0-9]{4}$/", $Code_postal)) {
    echo "<br>Format code postal invalide. Veuillez saisir un code postal de 4 chiffres.<br>";
    $errors = true;
}

if ($errors) {
    exit();
}

  
  try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $requete = "INSERT INTO detail_facturation_1(nom, prenom, Email, Num_nom_rue, Appartement_suite_unité, Ville, Région_département, Pays_région, Code_postal, Téléphone, Montant_don_Online, Remarque) VALUES ('$nomR', '$prenom', '$Email', '$Num_nom_rue', '$Appartement_suite_unité', '$Ville', '$Région_département', '$Pays_région', '$Code_postal', '$Téléphone', '$Montant_don_Online', '$Remarque')";
      // use exec() because no results are returned
      $conn->exec($requete);
      echo "New record created successfully";
  } catch (PDOException $e) {
      echo $requete . "<br>" . $e->getMessage();
  }
  
  $conn = null;  
?> 