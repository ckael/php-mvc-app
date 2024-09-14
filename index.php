<?php 
 if(isset($_GET['err']))
 {
 	if($_GET['err'] == 1)
 	{
 		echo '<script type="text/javascript"> alert("Utilisateur introuvable");</script>';
 	}
 	if($_GET['err'] == 2)
 	{
 		echo '<script type="text/javascript"> alert("Mot de passe incorecte");</script>';
 	}
 	if($_GET['err'] == 3)
 	{
 		echo '<script type="text/javascript"> alert("Pas de données a triater");</script>';
 	}
	else
	{
		echo '<script type="text/javascript"> alert("Veuillez remplir les champs pour se connecter");</script>';
	}
 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Etude MVC</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<link rel="icon" type="image/png" href="./Img/LOGO.png">
	<script type="text/javascript" src="Js/jquery.3.3.1.js"></script>
	
</head>
<body >
<div class="text-center vertical-align-middle pt-5" >
	<main class="form-signin   align-self-center ">

			<form method="POST"  action="Controller/LoginController.php">
				<img class="mb-4" src="Img/LOGO.png" alt="" width="72" height="72">
				<h1 class="h4 mb-3 fw-normal">Veuillez vous connecter</h1>

				<div class="form-floating pb-2" >
				<input type="text" class="form-control" id="floatingInput" name="login" placeholder="Nom d'utilisateur" validate>
				<label for="floatingInput">Nom d'utilisateur</label>
				</div>
				<div class="form-floating pb-3">
				<input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Mot de passe" validate>
				<label for="floatingPassword">Mot de passe</label>
				</div>

				
				<input class=" btn btn-sm btn-primary" type="submit" id="btn" name="submit" value="Se connecter">
			</form>
	</main>
</div>
</body>

<script type="text/javascript">
	
	$(document).ready(function()
	{
		
	});
</script>
</html>