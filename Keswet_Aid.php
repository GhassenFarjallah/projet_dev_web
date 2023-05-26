<?php
include("connexion.php");
if (isset($_POST['submit_2'])) {

  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer la valeur actuelle de Keswet_Aid
    $requete_select = "SELECT Keswet_Aid FROM detail_facturation_1 ORDER BY id_facture DESC LIMIT 1";
    $resultat = $conn->query($requete_select);
    $row = $resultat->fetch();
    $keswet_aid_actuel = $row['Keswet_Aid'];

    // Incrémenter la valeur de Keswet_Aid de 70
    $keswet_aid_nouveau = $keswet_aid_actuel + 70;

    // Mettre à jour la base de données avec la nouvelle valeur de Keswet_Aid
    $requete_update = "UPDATE detail_facturation_1 SET Keswet_Aid = $keswet_aid_nouveau ORDER BY id_facture DESC LIMIT 1";
    $conn->exec($requete_update);

    echo "<br>Aide réussie. Vous avez effectué une aide pour Keswet_Aid. Nouvelle valeur : $keswet_aid_nouveau";
  } catch (PDOException $e) {
    echo $requete . "<br>" . $e->getMessage();
  }
}
$conn = null;
?>
