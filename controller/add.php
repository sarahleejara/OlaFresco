<?php

include "../connexion.php";

$name = $_POST['name'];
$pass = $_POST['password'];

//var_dump($name, $pass);

$myselection = "INSERT INTO fresh (name, password) VALUES (:name, :password)";



$myrequest = $db->prepare($myselection);

$myrequest -> bindParam(':name', $name);
$myrequest -> bindParam(':password', $pass);

$myrequest -> execute();

header('Location: ../index.php'); // go back to the home page after the command is done
?>
