<?php
	if (isset($_POST['username']) AND isset($_POST['password'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
	if ($user == "cadenza123" && $pass == "denza123") {
		header("Location:http://localhost:8080/TA/Travelplace.html");
	}else {
		header("Location:http://localhost:8080/TA/login.html");

	}
}
?>