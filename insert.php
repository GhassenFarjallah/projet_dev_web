<?php

include "testphp.php";

$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$sujet=$_GET["sujet"];
$email=$_GET["email"];
$message=$_GET["message"];

$req=mysqli_query($link,"insert into formulaire(nom,prenom,sujet,email,message) values('$nom','$prenom','$sujet','$email','$message')");

if($req)
{
    echo"insertion réussite";
 
}
else{
    echo"erreur d'insertion";
}

?>