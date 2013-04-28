<?php
	//Soundcloud OAuth Info
	$redirect = "";
	$clientId = "";
	$clientSecret = "";

	//determine where we are.
	$servername = $_SERVER['SERVER_NAME'];

	if($servername == "localhost") {
		//localhost
		$redirect = "http://localhost:8888/PracticeRoom/connect.php";
		$clientId = "89aa098f19718a885389c33b81ca7c6e";
		$clientSecret = "9c09244bee5c4003b0e2fbb9272dedd2";
   		
	} else {
		//heroku
		$redirect = "http://practiceroom.herokuapp.com/connect.php";
		$clientId = "5ff4c246d31af2399229c70b6cef5b3e";
		$clientSecret = "566131899bc3c10481b64da417e0b105";
	}

   	
?>