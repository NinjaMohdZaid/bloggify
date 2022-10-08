    <!--user Interface-->
    <!--20/07/2021-->
    <?php
    session_start();
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
        <link rel="stylesheet" href="../cssFiles/userInterface.css">
        <title>User Interface</title>
    </head>
    <body>
        <!-- navigation starts from here -->
          <nav>
             <?php
                 $page='login';
                 require '../partials/navigation.php';
             ?>
          </nav>
          <!-- area1 starts from here -->
          <div id="area1">
              <form action="" method="GET">
                  <input type="text" placeholder="Search Blog Category" name="search">
                  <button>Search</button>
              </form>
          </div>
          <div id="area2">
             <?php 
                //fetching categories data
                include '../partials/dbmsConfig.php';
                  if(!isset($_GET['search'])){
                   $sql="SELECT * FROM `categories`";
                   $result=mysqli_query($connect,$sql);
                   if(!$result)
                   {
                     echo 'Error';
                   }
                   else{
                         $num=mysqli_num_rows($result);
                   }
                   if($num>0){
                       while($row=mysqli_fetch_assoc($result)){
                           $category=$row['categoryTitle'];
                           $sql1="SELECT * FROM `blogs` WHERE category='$category' AND isRecycle='NO'";
                           $result1=mysqli_query($connect,$sql1);
                           $num1=mysqli_num_rows($result1);
                           echo '
                <div class="area2a"><img src="https://source.unsplash.com/1600x900/?'.$row['categoryTitle'].'" alt="Image Not Loaded"><h4>'.$row['categoryTitle'].'</h4><P>'.$row['description'].'</P><a href="../phpFiles/blogsInCategory.php?category='.$row['categoryTitle'].'">'.$num1.' Blogs available click to watch</a></div>';

                       }
                   } 
                } 
                else{
                    $search=$_GET['search'];
                    $sql="SELECT * FROM `categories` WHERE categoryTitle LIKE '%$search%'";
                    $result=mysqli_query($connect,$sql);
                    if(!$result)
                    {
                      echo 'Error';
                    }
                    else{
                          $num=mysqli_num_rows($result);
                    }
                    if($num>0){
                        while($row=mysqli_fetch_assoc($result)){
                            $category=$row['categoryTitle'];
                           $sql1="SELECT * FROM `blogs` WHERE category='$category' AND isRecycle='NO'";
                           $result1=mysqli_query($connect,$sql1);
                           $num1=mysqli_num_rows($result1);
                            echo '
                 <div class="area2a"><img src="https://source.unsplash.com/1600x900/?'.$row['categoryTitle'].'" alt="Image Not Loaded"><h4>'.$row['categoryTitle'].'</h4><P>'.$row['description'].'</P><a href="../phpFiles/blogsInCategory.php?category='.$row['categoryTitle'].'">'.$num1.' Blogs available click to watch</a></div>';
                }  
            }
            else
            {
                echo '<h4>No Result Found</h4>';
            }
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