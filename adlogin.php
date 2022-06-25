<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','administration');

// get the post records
$username = $_POST['username'];
$password = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `login` (`username`, `passwoed`) VALUES ('$username', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
else{
    echo "not inserted";
}
?>