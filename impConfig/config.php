
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATABASE OPERATION</title>
<style>
  body{
    display:flex;
    justify-content:center;
    align-items:center;
    color:green;
    background:black;
  }
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
echo '<<<<---$Values stored in the database$-------->>>><br>';
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo '-----Connection made -------------<br>';
echo 'Coding sha 25';
echo '=--Global web designs--=<br>';
$sql = "CREATE DATABASE bloggify";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully<br>";
} else {
  echo "Error creating database: " . $conn->error;
}
echo '......$$$$$$......%%%%%% CODED IN GOOD FORMATE...........$$$$$$$.........%%%%%%%%%%<br>.......???????IIIIIVFGJHCVGNHJFJVJ------>>>>>>><br>';
echo 'ERROR ERRRORRRRRRRRRRRR$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ NO<br>';
echo 'Hello User-----FAIZA-----YOUR DATABASE IS READY TO USE PLEASE IMPORT THE FILE OF SQL<br>';

echo 'Contact : US IN FEATURE FOR ANY DEVELOPMENT <br>';
echo 'Your | Admin_id id :::::FAIZA-143::::::: | password :::::::::Faiza@12345::::::::::'; 

?>
</body>
</html>