<?php
$servername="localhost";
$username="Assigment_website";
$password="28080303";
$dbname="infoapplication";

$conn= new mysqli($servername, $username, $password,$dbname);

$sql ="CREATE TABLE Info(
            role VARCHAR(30) NOT NULL,
            first_name VARCHAR(30) NOT NULL,
            surname VARCHAR(30) NOT NULL,
            emailAddress VARCHAR(50) NOT NULL,
            birth VARCHAR(30) NOT NULL
        )";
if($conn->query($sql)=== TRUE) {
    echo("Table student has been created succesfully! :)");
} else {
    echo("Table error: " .$conn->error);
}
$conn->close();
?>
