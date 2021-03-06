<!DOCTYPE html>

<html lang="en">
<head>
<title>Colo Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">FREE SHIPPING ON ALL TUNISIA...</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!--  My Account -->
								
								
								<li class="account">

									<a href="logout.php">
										Logout...
								
										
									</a>
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">colo<span>shop</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="membre.php" >home</a></li>
								<li><a href="#">shop</a></li>
								<li><a href="../contact.html">contact</a></li>
							</ul>
							<form method="post" action="php/recherche.php">
							<ul class="navbar_user">
								<input type="text" name="recherche" placeholder="research">
								
								<li><a href="../compte.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="php/panier.php">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
									
									</a>
								</li>
							</ul>
						</form>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1>Acheter</h1>
<form method="post" action="stripe.php">
<div class="form-group" >
	<input class="form-control" type="text" name="username" placeholder="votre nom" required >
</div>
<div class="form-group" >
<input class="form-control" type="text" name="email" placeholder="
votre Email" required >

</div>
<div class="form-group" >
	<input class="form-control" type="text" name="text" placeholder="votre telephone" required >
</div>



<div class="form-group" >
<input class="form-control" type="text" name="carte" placeholder="
numero du carte Bleu" required >

</div>
<div class="align-items-center">
<button> <input type="submit" class ="btn btn-primary" name = "submit" value="valider"> </button>

</div>

</form>


</div>
</div>

<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. Template by <a href="#">Colorlib</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</header>

	

</div>


</body>
</html>
<!--<html>
<head>
	<title>paiment</title>
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
	<style >
		.main.container{
			padding-top: 50px;
			margin-left: 50px;
		}

	</style>
</head>
<body>

<form method="post" action="paiment.php">
	<input type="text" name="name" placeholder="votre nom" required></br>
	<input type="text" name="email" placeholder="votre email" required></br>
	<input type="number" name="phone" placeholder="telephone" required></br>
	<input type="text" name="num_carte" placeholder="numero du carte" required></br>
	<input type="submit" name="valider"></br>
</form>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script >
	stripe.setPublishablekey('pk_test_Ir8dgxZl716ES0krPt3jxmsj')
</script>
</body>
</html>-->