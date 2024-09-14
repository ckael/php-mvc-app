<?php 
session_start();

include_once("../Model/UserModel.php");
 
 $user = new user();
 if(isset($_POST['login']) && isset($_POST['password']))
 {
 	$login = $_POST['login'];
 	$password = $_POST['password'];
 		if($user -> login($login,$password) == 3)
 		{
 			$_SESSION['Login'] = $login;
 			header("location:../View/");
 		}
 		if($user -> login($login,$password) == 2)
 		{

 			header("location:../index.php?err=2");
 		}
 		elseif($user -> login($login,$password) == 1)
 		{
 			header("location:../index.php?err=1");
 		}
 }
 else
 {
 	header("location:../index.php?err=3");
 }

 ?>
