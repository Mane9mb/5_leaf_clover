<?php
$servername = "localhost";
$username = "5leafclover";
$password = "manelferran";
$dbname = "5leafclover";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nom=$_GET['username'];
$email=$_GET['mail'];
$password=$_GET['pass'];

$sql = "INSERT INTO usuaris VALUES (".$nom.",".$email.",'".$password."',null,")";
$ejecutar = consulta($sql);


$conn->close();
?>