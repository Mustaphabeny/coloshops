<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include_once("connex.inc.php");
$username = $_POST['username'];
$password = $_POST['psw'] ;
$mail = $_POST['email'];
$adresse = $_POST['adresse'];

$requete="INSERT INTO utilisateurs (Username,Password,Email,Adresse,Role) VALUES ('$username','$password','$mail','$adresse', 'client')";

	if ($_POST['psw'] == $_POST['psw-repeat']){
		
		$password = md5($password);
		$reg = "SELECT * FROM utilisateurs (Username) WHERE Username =$username";
	


		$reponse=mysqli_query($conn,$requete);

		die ("inscription terminée <a href= ' ../index.html'>connectez</a> vous ");
	
	}else echo "les deux passwords doivent etre identique";
		


?>
</body>
</html>