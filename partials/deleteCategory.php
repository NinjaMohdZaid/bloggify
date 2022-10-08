<!-- 22/07/21 -->
<?php
session_start();
if(isset($_SESSION['adminLoggedIn']))
{
    header('Location:../phpFiles/adminPanel.php');
}
//script for deleting a category
require '../partials/dbmsConfig.php';
$sno=$_GET['sno'];
$sql="DELETE FROM `categories` WHERE sno='$sno'";
$result=mysqli_query($connect,$sql);
if($result)
{
   $flag="Deleted successfully";
   header('Location:../phpFiles/adminAfterLogin.php');
}
else{
    $flag="Deleted successfully";
    header('Location:../phpFiles/adminAfterLogin.php');
}

?>