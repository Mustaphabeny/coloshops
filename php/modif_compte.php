<?php
include_once("connex.inc.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'] ;
$email = $_POST['email'];
$adresse = $_POST['adresse'];
if (isset($_POST["submit"])){
$query = "UPDATE utilisateurs SET Username = '$username', Email = '$email', Password = '$password ,Adresse = '$adresse'" ;
$res = mysqli_query($conn,$query);
}
//header('Location: ../compte.html');
?>