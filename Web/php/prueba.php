<?php
$servername = "localhost";
$username = "5leaf";
$password = "manelferran";

// Create connection
$conn = new mysqli($servername, $username, $password);
$conn->select_db('5leafclover');

$sql = "INSERT INTO usuaris (username, email, password)
        VALUES ('".$_POST["username"]."','".$_POST["email"]."','".$_POST["pass"]."');";
if (mysqli_query($conn, $sql)) {

      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 $conn->close();
?>
<html>
<body>
	<?echo $sql;?>

</body>
</html>