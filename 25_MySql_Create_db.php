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
    echo "Connect Successfully!<br>";
}



// Create a DB 
$sql= "CREATE DATABASE pikuDB8";
$result=mysqli_query($conn,$sql);

//Check for the database success
if($result){
    echo "The DB was created successfully!<br>";
}
else{
    echo "The DB was not created successfully brcause of this error--->" .mysqli_error($conn);
}



?>