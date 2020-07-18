<?php
	$host     = "localhost";
	$user     = "root";
	$pass 	  = "";
	$name     = "banus_db";

	$db = mysqli_connect($host, $user, $pass, $name);

	if(!$db){
		die("database tidak terkoneksi" . mysqli_connect_error());
	}else{
		echo "";
	}
?>