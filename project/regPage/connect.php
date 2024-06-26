<?php
// connecting to database for buyers registation
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'shop';

$conn = mysqli_connect($host,$username,$password,$dbname);

//// to get inputs
$number = $_POST['phone'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$ads = $_POST['address'];

/// inserting data into database

$sql="INSERT INTO ureg(phone,email,password,address) VALUES('$number','$mail','$pass','$ads')";

$stmt= mysqli_query($conn,$sql);
if($stmt== true){
    echo"register sucessfully";
}
else{
    echo"register unsucessful";
}

?>