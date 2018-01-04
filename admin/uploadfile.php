<?php
if(isset($_POST['upload'])){
$nouveaunom='../images/';
$nouveaunom= $nouveaunom.basename($_FILES['image']['name']);

include_once("../php/connex.inc.php");
$reference = $_POST['reference'];
$categorie = $_POST['categorie'];
$name = $_POST['nom'];
$prix = $_POST['prix'];
$image=$_FILES['image']['name'];
$quantite = $_POST['quantite'];


$requete="INSERT INTO produit (reference,categorie_produit,nom_produit,prix_produit,image_produit, quant_produit) VALUES ('$reference','$categorie','$name','$prix','$image','$quantite')";
$reponse=mysqli_query($conn,$requete);
if (move_uploaded_file($_FILES['image']['tmp_name'], $nouveaunom))
{
echo "le produit est bien ajouté ";
}
else 
{
	echo"err";
}
}

?>





<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

</head>
<body>
	<h1><center>Gestion des produits</center></h1>
	<div class="">
<div style="margin-left: 20px">
<form  action="uploadfile.php" method="POST" enctype="multipart/form-data" style="width:250px; height:300px" >
	<h3>Ajouter produit</h3>
<input type="hidden" name="size" value="100000" style="width:200px; height:20px">
<div>
	<input type="number" name="reference" placeholder="reference" style="width:200px; height:20px; padding: 4px; margin-top: 10px ">
</div>
<div>
	<input type="text" name="categorie" placeholder="categorie" style="width:200px; height:20px; padding: 4px; margin-top: 10px">
</div>
<div>
	<input type="text" name="nom" placeholder="nom" style="width:200px; height:20px; padding: 4px;
	margin-top: 10px;">
</div>
<div>
	<input type="number" name="prix" placeholder="prix" style="width:200px; height:20px; padding: 4px;
	margin-top: 10px;">
</div>
<div>
<input type="number" name="quantite" placeholder="quantite"  style="width:200px; height:20px; padding: 4px;
	margin-top: 10px;">
</div>
<div>
<input type="file" name="image"/ style="width:200px; height:20px; padding: 4px;
	margin-top: 10px;">
</div>

<div>
<input type="submit" name="upload" value="upload image" style="width:200px; height:30px; padding: 4px;
	margin-top: 10px;">
</div>

</form>
</div>

<div style="margin-left: 20px; margin-top: 30px;">
	<form  action="uploadfile.php" method="POST" enctype="multipart/form-data" style="width:500px; height:300px" >
	<h3>Liste des produits</h3>
<table border="1">
	  <tr style="width:500px; height:20px">
    <th style="width:100px; height:20px">Reference</th>
    <th style="width:100px; height:20px">Categorie</th>
    <th style="width:100px; height:20px">Nom</th>
    <th style="width:100px; height:20px">Prix</th>
    <th style="width:100px; height:20px">Quantité</th>
  </tr>
  <?php
include_once("../php/connex.inc.php");


$req = "SELECT * FROM produit WHERE prix_produit > 0";
$res = mysqli_query($conn,$req);

if($retour = mysqli_fetch_array($res))
{

?>
  <tr>
  	<td><?php echo $retour['reference']; ?></td>
  	<td><?php echo $retour['categorie_produit']; ?></td>
  	<td><?php echo $retour['nom_produit']; ?></td>
  	<td><?php echo $retour['prix_produit']; ?></td>
  	<td><?php echo $retour['quant_produit']; } ?></td>

  </tr>
</table>
</div>
</div>


</body>
</html>
