<?php
$servername = "localhost";
$username = "5leaf";
$password = "manelferran";

// Create connection
$conn = new mysqli($servername, $username, $password);
$conn->select_db('5leafclover');
?>