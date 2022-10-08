<?php
    //this file is for  connecting with the dbms
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database="bloggify";
    // Create a connection
    $connect = mysqli_connect($servername, $username, $password,$database);
?>