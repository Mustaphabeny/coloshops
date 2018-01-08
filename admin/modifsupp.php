<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
</head>
<body>
	<h1><center>modifier ou supprimer produit</center></h1></br></br></br>
<li style="margin-left: 20px;">
<a  href="gestionProduit.html">Retour </a>
</li>
<div style="margin-left: 20px; margin-top: 30px;">
	<form  action="" method="POST" enctype="multipart/form-data" style="width:500px; height:300px" >
	<h3>Liste des produits</h3>
<table class="table">
	<thead>
	  <tr >
    <th>Reference</th>
    <th>Categorie</th>
    <th>Nom</th>
    <th>Prix</th>
    <th>Quantité</th>
  </tr>
  	</thead>
  <?php
include_once("../php/connex.inc.php");


$req = "SELECT * FROM produit WHERE prix_produit > 0";
$res = mysqli_query($conn,$req);

while($retour = mysqli_fetch_array($res))
{

?>
<tbody>
  <tr >

  	<td><?php echo $retour['reference']; ?></td>
  	<td><?php echo $retour['categorie_produit']; ?></td>
  	<td><?php echo $retour['nom_produit']; ?></td>
  	<td><?php echo $retour['prix_produit']; ?></td>
  	<td><?php echo $retour['quant_produit'];  ?></td>
  	<td><a href="?action=modify&amp;reference=<?php echo $retour['reference']; ?>">modifier</a></td>
  	<td><a href="?action=delete&amp;reference=<?php echo $retour['reference'];   ?>">supprimer</a></td>
    <?php
  }
  ?>
  	

  </tr>
</tbody>
</table>
 <?php
 
    include_once("../php/connex.inc.php");
    if (isset($_GET['action'])) {
      # code...
  
    if($_GET['action']=='modify'){
   
      $reference = $_GET['reference'];
      $modifie = "SELECT * FROM produit WHERE Reference=$reference";
      $res = mysqli_query($conn,$modifie);
      $data = mysqli_fetch_array($res);
    
  /*  $req = "UPDATE produit SET  categorie_produit= ".$_POST['Categorie'].", nom_produit= $nom, prix_produit= $prix, quant_produit = $quantite WHERE Reference = $reference";
    $res = mysqli_query($conn,$req);*/ 
  

?>
</form>
<form  action="" method="POST" enctype="multipart/form-data" style="width:250px; height:300px; margin-left: 20px;" >
   <div class="form-group">

    <div>
      <input type="number"  name="reference" value="<?php echo $data['reference'];?>" class="form-control" >
    </div>
    <div>
      <input type="text" name="categorie" value="<?php echo $data['categorie_produit'];?>"  class="form-control">
    </div>
    <div>
      <input type="text" name="nom" value="<?php echo $data['nom_produit'];?>"  class="form-control">
    </div>
    <div>
      <input type="number" name="prix" value="<?php echo $data['prix_produit'];?>"  class="form-control">
    </div>
    <div>
    <input type="number" name="quantite" value="<?php echo $data['quant_produit'];?>"   class="form-control">
    </div>
    <div>
    <input type="submit" name="submit" value="modifier"  class="btn btn-primary">
    </div>
    </div>
  </form>
 
</div>

<?php
  }
   if($_GET['action']=='delete'){
      $reference = $_GET['reference'];
      $req = "DELETE FROM produit WHERE Reference=$reference";
      $res = mysqli_query($conn,$req);
      header('location: modifsupp.php');
    }
}
    ?>

</div>



</body>
</html>