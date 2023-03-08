<?php

// Ways to conncet to a MySQL Database
// 1. MySQLi extension
// 2. PDO

// connect to the database 
$servername="localhost";
$username="root";
$password="";

// Create a conncetion 
$conn = mysqli_connect($servername,$username,$password);


// checking connection 
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connect Successfully!";
}




?>