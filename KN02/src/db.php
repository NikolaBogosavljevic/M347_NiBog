<?php
    //database
    $servername = "kn02b-db"; 
    $username = "root";
    $password = "password";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connections
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select Host, User from mysql.user;";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo($row["Host"] . " / " . $row["User"] . "<br />");
    }
?>
