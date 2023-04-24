<?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "biblio";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}

function search ($email) {

	$conn = mysqli_connect("localhost:3308", "root", "", "biblio");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	$stmt = mysqli_stmt_init($conn);
	
	mysqli_stmt_prepare($stmt, "SELECT  Emailuser, FirstName, LastName  FROM users WHERE Email like ?");
	$email = "%" . $email . "%";
	mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_execute($stmt);

	$result = mysqli_stmt_get_result($stmt);

	return $result;
}

?>