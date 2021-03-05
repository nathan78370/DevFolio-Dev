<?php

function verif_auth($auth_necessaire)
{
$level=(isset($_SESSION['level']))?$_SESSION['level']:1;
return ($auth_necessaire <= intval($level));
}

function connexionbdd ()
	{
		$con= mysqli_connect("localhost:8889", "root", "root", "portfolio");
		if($con == null)
		{
			echo "<br/> Erreur de connexion au serveur !</br>";
		}
		return $con ;
	}
?>