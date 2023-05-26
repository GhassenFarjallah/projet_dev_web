<?php
//include('connexion.php');

$host="localhost";
$user="root";
$password="";
$dbname="projet_sos";
$link=mysqli_connect($host,$user,$password) or die ('impossible de se connceter');
//mysql_select_db($dbname,$link);

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
