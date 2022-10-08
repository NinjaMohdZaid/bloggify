<!--8/20/21-->
<?php
session_start();
if(!isset($_SESSION['adminLoggedIn']))
{
   header('Location:adminPanel.php'); 
}
//post method action
   if($_SERVER['REQUEST_METHOD']=='POST')
   {   
       require '../partials/dbmsConfig.php';
       $title=$_POST['title'];
       $description=$_POST['description'];
       $sql="INSERT INTO `categories`(`sno`, `categoryTitle`, `description`) VALUES (NULL,'$title','$description')";
       $result=mysqli_query($connect,$sql);
       if($result)
       {
         //category added
         echo 'add';
       }
       else{
           //category not added
           echo 'not add';
       }
   
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssFiles/addCategory.css">
    <title>Add Category</title>
</head>
<body>
    <!-- navigation stars from here -->
    <nav>
       <a href="" id="logo">Admin Of Bloggify</a><a href="adminAfterLogin.php">Categories</a><a href="../partials/logout.php">Logout</a>
    </nav>
    <hr>
    <!--area1 starts from here-->
    <div id="area1">
           <h1>Add a category</h1>
            <!--form for loging in a user-->
            <form action="addCategory.php" method="POST">
                  <input type="title" name="title" placeholder="Title">
                  <textarea name="description" id="" cols="30" rows="10" placeholder="Describe about category"></textarea>
                   <button>Add</button>
            </form>
    </div>
</body>
</html>