<?php 

class config{

function __construct()
{

}
function conect(){
try
{
	$base = new PDO("mysql:host=localhost:3306;dbname=facture","root","");
	return $base;
}
catch(PDOExeption $e)
{
	die("Connection failed: " . $e->getMessage());
}
}

}
 ?>