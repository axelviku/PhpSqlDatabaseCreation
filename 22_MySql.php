<?php

echo "<h1>Welcome to the sql database connection.</h1>";
//Connect to my sql database


//Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

//Create a connection 
$conn = mysqli_connect($servername, $username, $password);
//Die if connection was not successfull

if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}else {
    echo "Connection was successfully created.";
}


?>