<?php

// connect to the database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "pikuDB";

// Create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!<br>";

}


$sql = "SELECT * FROM `table1` WHERE `name`= 'piku'";
$result = mysqli_query($conn,$sql);


// Usage of WHERE Clause to fetch data from the database

$num = mysqli_num_rows($result);
echo $num ." records fetch in the Database.";
echo"<br>"; 

// Displaying the rows returned by the sql query

$no=1;

if($num>0){
    // we can fetch in a better way using the while loop 
    while($row =mysqli_fetch_assoc($result)){
        echo $no.". Hello ".$row['name'].", Your Roll No. is: ",$row['roll'];
        echo"<br>";
        $no=$no+1;
    }

}

//Uses of WHERE Clause to Update Data
$sql="UPDATE `table1` SET `name` = 'piku87' WHERE `roll` = 8";
$result=mysqli_query($conn,$sql);

echo "<br>";
echo var_dump($result); //It return true if data updated successfully
echo "<br>";
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff";  //It returns how many rows are affected
echo "<br>";



if($result){
    echo "We updated the record successfully";
}
else{
    echo "We cannot updated the record successfully";
}





?>