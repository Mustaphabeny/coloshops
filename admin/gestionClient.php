<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
</head>
<body>
 
	<h1><center>Gestion des Clients</center></h1></br></br></br>
<li style="margin-left: 20px;">
<a  href="admin.html">Retour </a>
</li>
<div style="margin-left: 50px; margin-top: 30px;">
	<form  action="" method="POST" enctype="multipart/form-data" style="width:500px; height:300px" >
	<h3>Liste des Clients</h3>
<table class="table">
	<thead>
	  <tr >
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Password</th>
    <th>Adresse</th>
  </tr>
  	</thead>
  <?php
include_once("../php/connex.inc.php");


$req = "SELECT * FROM utilisateurs WHERE Role = 'client'";
$res = mysqli_query($conn,$req);

while($retour = mysqli_fetch_array($res))
{

?>
<tbody>
  <tr >

  	<td><?php echo $retour['Id']; ?></td>
  	<td><?php echo $retour['Username']; ?></td>
  	<td><?php echo $retour['Email']; ?></td>
  	<td><?php echo $retour['Password']; ?></td>
  	<td><?php echo $retour['Adresse'];  ?></td>
  	<td><a href="?action=modifyanddelete&amp;Id=<?php echo $retour['Id'];   ?>">supprimer</a></td>
    <td><a href="?action=modify&amp;Id=<?php echo $retour['Id']; ?>">modifier</a></td>

    <?php

  }
  ?>
  <?php
  include_once("../php/connex.inc.php");
  if (isset($_GET['action'])) {
   
   if($_GET['action']=='modifyanddelete'){
      $reference = $_GET['Id'];
      $req = "DELETE FROM utilisateurs WHERE Id = $Id ";
      $res = mysqli_query($conn,$req);
      header('location: gestionClient.php');
    }
      }
  ?>
  	

  </tr>
</tbody>
</table>
</form>


  

</div>
</body>
</html>