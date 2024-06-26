<?php 
// get inputs

$phone = $_POST['phone'];
$pds = $_POST['password'];


// connection with db with short cut techinque
$conn = mysqli_connect('localhost','root','','shop');

// run match query
 $sql = "SELECT * from ureg where phone ='$phone' && password ='$pds'";
 $result = mysqli_query($conn,$sql);
 $count = mysqli_num_rows($result);

 
if($count>0){
    echo"login sucessful";
}
else{
    echo"login failed";
}


?>