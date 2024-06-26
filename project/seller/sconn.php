<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

// Create connection
$conn =  mysqli_connect($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$phone= $_POST['phone1'];
$password = $_POST['password1'];
$choice = $_POST['choice'];
// insertation of values into db
$stmt ="INSERT INTO saccount (phone, password,category) VALUES ('$phone', '$password','$choice')";

$sql = mysqli_query($conn,$stmt);



header("Location: ../sellerlogin/slogin.php");
exit();
?>
