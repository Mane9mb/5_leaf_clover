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
	
	$sql =  "SELECT * FROM `usuaris` WHERE `username` ='{$username}' AND `password`='{$password}'";
	$data= mysqli_query($conn,$sql);


	$row_cnt = mysqli_num_rows($data);

	if($row_cnt == 1){
		$row = mysqli_fetch_array($data);
		$id = $row['id_usuario'];
		
		$_SESSION['user_id']=$id;
		echo "succes";
		return "succes";
	}
	else{
		
		return "Falled";
	}
}

?>