<!--7/24/21-->
<!-- This page conatins all the posted blogs of the user-->
<?php
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['loggedIn']))
{
    header('Location:../');
}
              $sno=$_GET['sno'];
              include '../partials/dbmsConfig.php';
              $sql="SELECT * FROM `blogs` WHERE email='$email' AND isRecycle='no' AND sno='$sno'";
              $result=mysqli_query($connect,$sql);
              $num=mysqli_num_rows($result);
              $row=mysqli_fetch_assoc($result);
              $sno=$row['sno'];
              $sql1="SELECT * FROM `comments` WHERE sno='$sno'";
              $result1=mysqli_query($connect,$sql1);
              $num1=mysqli_num_rows($result1);//number of comments 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssFiles/readPostedBlog.css">
    <title>Read Blog</title>
</head>
<body>
     <!-- navigation starts from here -->
     <nav>
             <?php
                 $page='login';
                 require '../partials/navigation.php';
             ?>
          </nav>
      <!--area1 starts from here-->
      <div id="outerDiv">
      <div id="area1">
            <?php
               echo '<img src="../images/'.$row['image'].'"><span>'.$row['date'].'| Comments '.$num1.' | Views '.$row['views'].'</span><h3>'.$row['title'].'</h3><p>'.$row['description'].'</p>';
             ?>
             </div>
             <div id="area2">
              <h4>Comments</h4>
              <form action="../partials/commentOnPosted.php?sno=<?php echo $row['sno'];   ?>" method="post">
                 <input type="text" placeholder="Comment" name="comment">
                 <button><img src="../icons/send.svg" alt=""></button>
             </form>
             <div id="comments">
             <?php
                $sql="SELECT * FROM `comments` WHERE sno='$sno'";
                $result=mysqli_query($connect,$sql);
                $num=mysqli_num_rows($result);
                if($num>0)
                {
                    while($row=mysqli_fetch_assoc($result)){
                    echo '
             <div class="comment"><div><img src="../icons/comment.svg"><h5>'.$row['email'].'</h5></div><p>'.$row['comment'].'</p></div>';

            }
              
        }
        else
                {
                    echo '<h5>No Comments For This blog</h5>';
                }
            ?>
            </div>
      </div>
</div>
  <!--footer starts from here-->
  <footer>
                <?php
                     $page='login';
                     include '../partials/footer.php';
                ?>
            </footer>    

    
</body>
</html>