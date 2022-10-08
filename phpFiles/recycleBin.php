<!--7/24/21-->
<!-- This page conatins all the posted blogs of the user in the recycle bin-->
<?php
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['loggedIn']))
{
    header('Location:../');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssFiles/recycleBin.css">
    <title>Recycle Bin</title>
</head>
<body>
         <?php
              if(isset($_GET['flag']))
              {
                  if($_GET['flag']==1)
                  {
                     $placeholder="Blog Has Been Recycled Successfully";
                     include '../partials/successStatus.php';
                  }
                  else
                  {
                    $placeholder="Blog Has Not Been Recycled";
                    include '../partials/unsuccessStatus.php';   
                  }
              }

            ?>
            <?php
            //delete
              if(isset($_GET['dflag']))
              {
                  if($_GET['dflag']==1)
                  {
                     $placeholder="Blog Has Been Deleted Parmanently";
                     include '../partials/successStatus.php';
                  }
                  else
                  {
                    $placeholder="Blog Has Not Been Deleted";
                    include '../partials/unsuccessStatus.php';   
                  }
              }

            ?>
      <!-- navigation starts from here -->
      <nav>
             <?php
                 $page='login';
                 require '../partials/navigation.php';
             ?>
          </nav>
          <!-- area1 starts from here -->
          <div id="area2">
             <?php 
              //fetching blogs data
              include '../partials/dbmsConfig.php';
              $sql="SELECT * FROM `blogs` WHERE email='$email' AND isRecycle='yes'";
              $result=mysqli_query($connect,$sql);
              $num=mysqli_num_rows($result);
              if($num>0){
                while($row=mysqli_fetch_assoc($result)){
                    $sno=$row['sno'];
                    $sql1="SELECT * FROM `comments` WHERE sno='$sno'";
                    $result1=mysqli_query($connect,$sql1);
                    $num1=mysqli_num_rows($result1);//number of comments 
                    echo '
         <div class="area2a"><img class="titleImage" src="../images/'.$row['image'].'" alt="Image Not Loaded"><span>'.$row['date'].'</span><h4>'.$row['title'].'</h4><P>'.$row['description'].'</P><div class="info">'.$row['views'].' Views | '.$num1.' comments</div><div class="action"><a href="../partials/deletePermanently.php?sno='.$row['sno'].'"><img src="../icons/delete.svg"></a><a href="../partials/reuse.php?sno='.$row['sno'].'"><img src="../icons/reuse.png"></a></div></div>';

                }
            }
            else
            {
                echo '<h4>Empty Recycle Bin</h4>';
            }
            ?>
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