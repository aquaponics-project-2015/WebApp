<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Proj";

			// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}





 if (isset($_POST["form"])) {

 $u_name = mysqli_real_escape_string($_POST['user']);
 $p_word = mysqli_real_escape_string($_POST['pass']);
 

if ($u_name =="" || $p_word=="") {

	// display error if form submitted is empty
	echo "please fill out all data";
} else {
	$sql = 'INSERT INTO users values($u_name,$p_word');
	$query = mysqli_query ($conn, $sql);
	header('Location: dash.php');

}








}

















?>