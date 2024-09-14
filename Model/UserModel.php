<?php 

include_once("../Conf/Config.php");

class user{

	function __construct()
	{

	}

	function login($Login,$Password)
	{

		$conect = new config();
		$c = $conect->conect();
		$query = "SELECT * FROM user WHERE Login = '$Login'";
		$result = $c->prepare($query);
		$result->execute();
		
		if($result->rowCount()>0)
		{
			$data = $result->fetch() ;
					echo $data["PassWord"];
				if($data['PassWord']==$Password)
				{
					return 3;
				}
				else
				{
					return 2;
				}

			
		}
		else
		{
			return 1;
		}
		
	}
	
}




?>
