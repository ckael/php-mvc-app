<?php 
include_once("../Controller/SessionController.php")
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../Css/bootstrap.css">
	<link rel="stylesheet" href="../Css/font-awesome.css">
	<link rel="stylesheet" href="../Css/style.css">
	<link rel="icon" type="image/png" href="../Img/LOGO.png">
	<script src="../Js/jquery.3.3.1.js"></script>
	<title>Riantsoa ckael</title>
</head>
<body>
	
	<div class=" d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 20%; height: 100vh; position:fixed;">
			<div class="d-flex flex-column justify-content-center align-items-center">
				<div>
					<a href="index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
					<img src="../Img/LOGO.png" class="align-center" alt="Logo" width="40" height="40">
					</a>
				</div>
			<br><div class="fs-4"><?php echo $_SESSION['Login']; ?></div>
			</div>
			<hr>
			<ul class="nav nav-pills flex-column mb-auto pb-auto">
			<li class="nav-item">
				<a href="./" class="nav-link active btnhome" aria-current="page">
					<i class="fa fa-home" aria-hidden="true"></i>
				Accueil
				</a>
			</li>
			<li>
				<a href="index.php?page=ajout" class="btnajout nav-link text-white">
				<i class="fa fa-floppy-o" aria-hidden="true"></i>
				Ajout
				</a>
			</li>
			<li>
				<a href="index.php?page=facture" class="btnfacture nav-link text-white">
				<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
					Facture
				</a>
			</li>
			<li>
				<a href="index.php?page=archive" class="btnarchive nav-link text-white">
				<i class="fa fa-archive" aria-hidden="true"></i>
				Archive
				</a>
			</li>
			<li>
				<a href="index.php?page=suivi" class="btnsuivi nav-link text-white">
				<i class="fa fa-area-chart" aria-hidden="true"></i>
				Suivi
				</a>
			</li>
			<hr>
			
				<li >
					<a href="../Controller/SignOutController.php" class="nav-link text-white">
					<i class="fa fa-sign-out" aria-hidden="true"></i>
					Se deconnecter
					</a>
				</li>
			</ul>
	</div>
	<div id="root"  class="ml-4 " style="width: 80% ; margin-left:20%;">

	</div>

</body>
<script>
	$(document).ready(function(){

  var url = window.location.href;
// Utiliser la classe URL pour analyser l'URL
  var urlObj = new URL(url);

// Extraire la valeur du paramètre "Id"
 var pageValue = urlObj.searchParams.get("page");

if(pageValue!==null)
{
 var newurl = pageValue+".php";

 $("#root").load(newurl);
    $(".btn"+pageValue).addClass("active");
    $(".btnhome").removeClass("active");
	$(".btnhome").addClass("text-white");
    
}else
{
	$("#root").load("home.php");
}
	});
</script>
</html>