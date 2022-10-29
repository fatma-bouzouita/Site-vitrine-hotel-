<?php

	include "connexion.php";
	if(isset($_GET["name"]) && isset($_GET["birth"]) && isset($_GET["address"]) && isset($_GET["mail"]) && isset($_GET["requirements"]) && isset($_GET["arrival"]) && isset($_GET["departure"]) && isset($_GET["adults"]) && isset($_GET["children"]) && isset($_GET["room"]) && isset($_GET["payment"]))
	{
		$name= $_GET["name"];
		$birth= $_GET["birth"];
		$address= $_GET["address"];
		$mail= $_GET["mail"];
		$requirements= $_GET["requirements"];
		$arrival= $_GET["arrival"];
		$departure= $_GET["departure"];
		$adults= $_GET["adults"];
		$children= $_GET["children"];
		$room= $_GET["room"];
		$payment= $_GET["payment"];
	}
	
	$req=mysqli_query($link,"insert into reservation(name,birth,address,mail,requirements,arrival,departure,adults,children,room,payment) values('$name','$birth','$address','$mail','$requirements','$arrival','$departure','$adults','$children','$room','$payment')");
	if($req)
	{
		echo "insertion effectuée";
	}
	else
	{
		echo "erreur d'insertion";
	}



?>