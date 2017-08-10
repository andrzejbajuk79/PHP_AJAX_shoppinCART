<?php 


$db_host = 'localhost';
	$db_name = 'shop';
	$db_user = 'root';
	$db_pass = '';

	$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

	// obiektowo
// $mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);


	if(mysqli_connect_errno()) {
		ptint_f("brak polaczenia : %\n,mysqli_connect_error");
		echo "nie polaczono".mysqli_connect_error();
	} else {
		echo "";
	}
 ?>