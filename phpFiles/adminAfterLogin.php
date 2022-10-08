<!--7/20/21-->
<!-- this page is for admin-->
<?
session_start();
if(!isset($_SESSION['adminLoggedIn']))
{
   header('Location:adminPanel.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssFiles/adminAfterLogin.css">
    <title>Admin Main</title>
</head>
<body>
    <nav>
       <a href="" id="logo">Admin Of Bloggify</a><a href="addCategory.php">Add a Category</a><a href="../partials/logout.php">Logout</a>
    </nav>
    <hr>
    <div id="area1">
        <?php
             //fetching categories data
             include '../partials/dbmsConfig.php';
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
            
           echo '<h3>Your Inserted Categories Are Here</h3>
                 <div id="area1a">';
           while($row=mysqli_fetch_assoc($result))
           {
             echo '
                <div class="area1a1"><img class="titleImage" src="https://source.unsplash.com/1600x900/?'.$row['categoryTitle'].'" alt="Image Not Loaded"><h4>'.$row['categoryTitle'].'</h4><P>'.$row['description'].'</P><a href="../partials/deleteCategory.php?sno='.$row['sno'].'"><img class="actionImage" src="../icons/delete.svg"></a></div>
              ';
           }
           echo '</div>';
        }
        else{
            echo '<h3>No Categories Are Here | Please Insert new One</h3>';
        }
        ?>
 </div>
</body>
</html>