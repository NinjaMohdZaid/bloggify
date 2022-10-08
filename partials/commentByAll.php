<?php
//date 24/07/21
//page for comment
session_start();
$email=$_SESSION['email'];
require '../partials/dbmsConfig.php';
if($_SERVER['REQUEST_METHOD']=='POST')
   { 
       $sno=$_GET['sno'];
       $comment=$_POST['comment'];
       $sql="INSERT INTO `comments`(`sno`, `comment`, `email`) VALUES ('$sno','$comment','$email')";
       $result=mysqli_query($connect,$sql);
       if($result)
       {
           header('Location:../phpFiles/readBlogsOtherAll.php?sno='.$sno.'&flag=1#area2');
       }
       else
        {
            header('Location:../phpFiles/readBlogsOtherAll.php?sno='.$sno.'&flag=0#area2');
        }

   }


?>