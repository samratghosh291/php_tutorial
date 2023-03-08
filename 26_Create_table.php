<?php

// Ways to conncet to a MySQL Database
// 1. MySQLi extension
// 2. PDO

// connect to the database 
$servername="localhost";
$username="root";
$password="";
$database = "pikuDB";


// Create a conncetion 
$conn = mysqli_connect($servername,$username,$password,$database);


// checking connection 
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connect Successfully!<br>";
}



// Create a TABLE
$sql= "CREATE TABLE `employee2` (`SL. NO.` INT(10) NOT NULL AUTO_INCREMENT , `NAME` TEXT NOT NULL , `ROLL_NO.` VARCHAR(20) NOT NULL , PRIMARY KEY (`SL. NO.`))";
$result = mysqli_query($conn,$sql);

// Check for the table creation success 

if($result){
    echo "The table was created successfully!";
}
else{
    echo "The table was not created because of this error--->".mysqli_error($conn);
}




?>