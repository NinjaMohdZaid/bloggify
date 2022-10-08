<!--20/7/2021-->
<!--page for creating an account-->
<?php
session_start();
if(isset($_SESSION['loggedIn']))
{
    header('Location:userInterface.php');
}
//action of the form here
if($_SERVER['REQUEST_METHOD']=='POST')
{
  require '../partials/dbmsConfig.php';//conncetd to the database
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirmPassword=$_POST['confirmPassword'];
  //inserting into the database
  if($password==$confirmPassword){
      $sql="SELECT * FROM `accounts` where email='$email'";
      $result=mysqli_query($connect,$sql);
      $num=mysqli_num_rows($result);
    //   num==0 means no same email present
        if($num==0)
        {
          $sql="INSERT INTO `accounts` (`sno`,`name`,`email`,`password`) VALUES (NULL,'$name','$email','$password')";
          $result=mysqli_query($connect,$sql);
          if($result)
          {
            session_start();
            $_SESSION['loggedIn']=TRUE;
            $_SESSION['email']=$email;
            header('Location:../index.php');//this page decides where to go
          }
          else{
               $flag='Account Not Created at this moment due to Technical problem | Please Try Again Leter';
          }
      }
      else{
           $flag='Email already in use';
      }
  }
  else
  {
      $flag='Password not Matched';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssFiles/signUp.css">
    <title>Sign Up | Bloggify</title>
</head>
<body>
<nav>
    <?php
        $page='unlogin';
        require '../partials/navigation.php';
    ?>
    </nav>
    <div id="area1">
         <h1>Fill these details to join us</h1>
         <?php
           if(isset($flag)){
           echo '<h3 id="warning">'.$flag.'</h3>';
           }
         ?>
        <form action="signUp.php" method="POST">
            <input type="text" name="name" placeholder="Enter Your Name" required>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <input type="text" name="password" placeholder="Enter Password" required minlength="6">
            <input type="password" name="confirmPassword" placeholder="Confirm Password" required minlength="6">
            <button>Sign Up</button>
        </form>
    </div>
     <!--footer starts from here-->
     <footer>
        <?php
             $page='unlogin';
             include '../partials/footer.php';
        ?>
    </footer>
</body>
</html>
