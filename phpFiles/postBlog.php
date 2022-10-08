<!--user Interface for posting blog-->
<!--23/07/2021-->
    <?php
    session_start();
    if(!isset($_SESSION['loggedIn']))
    {
        header('Location:../');
    }
    require '../partials/dbmsConfig.php';
    $sql="SELECT * FROM `categories`";
    $result=mysqli_query($connect,$sql);

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../cssFiles/postBlog.css">
        <title>Post Blog</title>
    </head>
    <body>
    <?php
              if(isset($_GET['flag']))
              {
                  if($_GET['flag']==1)
                  {
                     $placeholder="Blog Has Been Posted Successfully";
                     include '../partials/successStatus.php';
                  }
                  else
                  {
                    $placeholder="Blog Has Not Been Posted Successfully";
                    include '../partials/successStatus.php';   
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
          <div id="area1">
            <!--form for loging in a user-->
            <form action="../partials/insertBlog.php" method="post" enctype="multipart/form-data">
                  <label for="image">Upload Image</label>
                  <input type="file" name='image' required>
                  <select name="category" required>
                      <option value="">Select Category</option>
                      <?php
                          while($row=mysqli_fetch_assoc($result))
                          {
                              echo '<option value="'.$row['categoryTitle'].'">'.$row['categoryTitle'].'</option>';
                          }

                       ?>
                  </select>
                  <input type="text" name="title" placeholder="Write Title" required>
                  <textarea name="description" cols="30" rows="10" placeholder="Describe About Your Blog" required></textarea>
                   <button>Login</button>
            </form>
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