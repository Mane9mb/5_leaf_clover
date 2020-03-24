<?php
session_start();
 include 'conexio.php';
$servername = "localhost";
$serverusername = "5leaf";
$serverpassword = "manelferran";

// Create connection
$conn = new mysqli($servername, $serverusername, $serverpassword);
$conn->select_db('5leafclover');

if (isset($_GET['username'])&&isset($_GET['password'])){
	$username = $_GET['username'];
	$password = $_GET['password'];
	$email = $_GET['email'];

	
	$sql =  $sql = "INSERT INTO usuaris (username, email, password)
        VALUES ('".$username."','".$email."','".$password."');";
	
	if (mysqli_query($conn, $sql)) {
	echo "succes";
      return "succes";
	} else {
	
      return "falled";
  }
}  
?>