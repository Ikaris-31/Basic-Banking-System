<?php

$servername = "localhost";
$username = "id19129898_id_20121231root";
$password = "buDFS(t~0+5v&HiQ";
$database = "id19129898_id_20121231";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }




$query="select * from customers";
$result=mysqli_query($conn,$query);

foreach($result as $row)
            echo "Id:$row[Id],Account_no:$row[Account_no],Customer:$row[Customer_name],balance:$row[Balance] <br>";

?>



