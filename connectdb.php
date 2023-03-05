<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "gch1107";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        "Failed to connect !";
    } else {
        "Successfully connected !";
    }
?>