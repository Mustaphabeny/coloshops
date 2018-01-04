<?php 




if (isset($_POST['username'])&& isset($_POST['password']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$conn = mysqli_connect('localhost', 'root', '', 'projet');
	$query =  "SELECT * FROM utilisateurs WHERE Username = '$username' && Password = '$password' && Role = 'client' ";
	$resultat = mysqli_query($conn,$query);
	
		if (mysqli_num_rows($resultat) >0 ){
			session_start();
		$_SESSION['projet']='true';
		header('Location: membre.php');

	}else echo "Pseudo ou Password incorrect !";

	$query1 =  "SELECT * FROM utilisateurs WHERE Username = '$username' && Password = '$password' && Role = 'admin' ";
	$resultat = mysqli_query($conn,$query1);
	if (mysqli_num_rows($resultat) >0 ){
			session_start();
		$_SESSION['projet']='true';
		header('Location: ../admin/admin.html');

	}else echo "Pseudo ou Password incorrect !";
}


?>
