<?php
$user="root";
$mdp="";
$server="localhost";
$db="testdb";

$link=mysqli_connect($server,$user,$mdp,$db);

if($link)
{

    //echo("jawwek behi");

}else
{
    die(mysqli_connect_error());
}




?>