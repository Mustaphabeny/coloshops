<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
</head>
<body>
	<h1><center>Ajouter produit</center></h1></br></br></br>
	<li style="margin-left: 20px;">
<a  href="gestionProduit.html">Retour </a>
</li></br>

<form  action="uploadfile.php" method="POST" enctype="multipart/form-data" style="width:250px; height:300px; margin-left: 20px;" >
	 <div class="form-group">

		<div>
			<input type="number" name="reference" placeholder="reference" class="form-control" ></br>
		</div>
		<div>
			<select name="categorie" class="form-control" >
				<?php 
				include_once("../php/connex.inc.php");
				$select = "SELECT * FROM categorie";
				$res1 = mysqli_query($conn,$select);
				while ($res = mysqli_fetch_array($res1)){
					?>
					<option ><?php echo $res['nom']; ?></option>
					
					<?php
				}
				?>
			</select></br>
		</div>
		<div>
			<input type="text" name="nom" placeholder="nom"  class="form-control"></br>
		</div>
		<div>
			<input type="number" name="prix" placeholder="prix"  class="form-control"></br>
		</div>
		<div>
		<input type="number" name="quantite" placeholder="quantite"   class="form-control"></br>
		</div>
		<div>
		<input type="file" name="image"  class="form-control-file" ></br>
		</div>

		<div>
		<input type="submit" name="upload" value="upload image"  class="btn btn-primary"></br>
		</div>

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
	</div>
</form>

</body>
</html>



