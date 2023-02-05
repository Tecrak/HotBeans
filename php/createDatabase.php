<?php //
$servername="localhost";
$username="Assigment_website";
$password="28080303";

$conn=mysqli_connect(
        $servername,
        $username,
        $password
);

if(!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}

$sql="CREATE DATABASE InfoApplication";
 if(mysqli_query($conn, $sql)) {
     echo"Database is created succesfully!";
 } else {
     echo"Error creating the database " . mysqli_error($conn);
 }
 mysqli_close($conn);

 
?>