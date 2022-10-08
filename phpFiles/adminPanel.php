<!--20/2/2021-->
<!--adminID=Faiza-143-->
<!--password-Faiza@12345-->
<?php
session_start();
if(isset($_SESSION['adminLoggedIn']))
{
   header('Location:adminAfterLogin.php'); 
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
   if($_POST['adminID']=='Faiza-143' AND $_POST['password']=='Faiza@12345')
   {
       $_SESSION['adminLoggedIn']=TRUE;
       header('Location:adminAfterLogin.php'); 

   }
   else{
       $flag='Incorrect Credentials';
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssFiles/adminPanel.css">
    <title>Admin Panel</title>
</head>
<body>
    <nav>
       <a href="" id="logo">Admin Of Bloggify</a>
    </nav>
    <hr>
    <!--area1 starts from here-->
    <div id="area1">
           <h1>This panel is only For Admin</h1>
           <?php
                if(isset($flag)){
                echo '<h3 id="warning">'.$flag.'</h3>';
                }
            ?>
            <!--form for loging in a user-->
            <form action="adminPanel.php" method="post">
                  <input type="text" name="adminID" placeholder="Enter adminID">
                  <input type="password" name="password" placeholder="Enter Password">
                  <button>Login</button>
            </form>
    </div>
</body>
</html>