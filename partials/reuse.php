<?php
// script for moving the blog into database
//7/24/21
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['loggedIn']))
{
    header('Location:../');
}
require 'dbmsConfig.php';
$sno=$_GET['sno'];
$sql="UPDATE `blogs` SET `isRecycle`='no' WHERE sno='$sno' AND email='$email'";
$result=mysqli_query($connect,$sql);
if($result)
{
    header('Location:../phpFiles/recycleBin.php?flag=1');
}
else
{
    header('Location:../phpFiles/recycleBin.php?flag=0');
}




?>