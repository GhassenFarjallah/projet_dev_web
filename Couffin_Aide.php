<?php
include("connexion.php");
if (isset($_POST['submit_3'])) {

    try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Récupérer la valeur actuelle de Couffin_Aide
      $requete_select = "SELECT Couffin_Aide FROM detail_facturation_1 ORDER BY id_facture DESC LIMIT 1";
      $resultat = $conn->query($requete_select);
      $row = $resultat->fetch();
      $couffin_aid_actuel = $row['Couffin_Aide'];

      // Incrémenter la valeur de Couffin_Aide de 100
      $couffin_aid_nouveau = $couffin_aid_actuel + 100;

      // Mettre à jour la base de données avec la nouvelle valeur de Couffin_Aide
      $requete_update = "UPDATE detail_facturation_1 SET Couffin_Aide = $couffin_aid_nouveau ORDER BY id_facture DESC LIMIT 1";
      $conn->exec($requete_update);

      echo "<br>Aide réussie. Vous avez effectué une aide pour Couffin_Aide. Nouvelle valeur : $couffin_aid_nouveau";
    } catch (PDOException $e) {
      echo $requete . "<br>" . $e->getMessage();
    }
    $conn = null; 
    }
?>
