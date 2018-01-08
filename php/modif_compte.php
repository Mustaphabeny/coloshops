<?php
include_once("connex.inc.php");
session_start();
if(isset($_GET['id'])){
$username = $_POST["username"];
$password = $_POST["password"] ;
$email = $_POST["email"];
$adresse = $_POST["adresse"];

$query = "UPDATE utilisateurs SET Username = '$username', Email = '$email', Password =' $password' , Adresse = '$adresse'  " ;
$res = mysqli_query($conn,$query);
if ($res) {
	# code...

echo "bien";

}else{
	echo "non";
}
}
//header('Location: ../compte.html');
?>