<!-- This page is the home page of the user-->
<!--Date 7/18/2021-->
<?php
session_start();
if(isset($_SESSION['loggedIn']))
{
    header('Location:phpFiles/userInterface.php');
}
//post method action
if($_SERVER['REQUEST_METHOD']=='POST')
{
    require 'partials/dbmsConfig.php';//connceted to the database
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `accounts` WHERE email='$email'";//checking account is present or not
    $result=mysqli_query($connect,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
        $sql="SELECT * FROM `accounts` WHERE email='$email' AND password='$password'";//checking account is present or not
        $result=mysqli_query($connect,$sql);
        $num=mysqli_num_rows($result);
        if($num==1)
        {
            session_start();
            $_SESSION['loggedIn']=TRUE;
            $_SESSION['email']=$email;
            header('Location:phpFiles/userInterface.php');//this page decides where to go

        }
        else
        {
             $flag='Invalid Password';
        }
    }
    else{
        $flag='Invalid Email';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Home | Bloggify</title>
</head>
<body>
    <nav>
    <?php
        $page='index';
        require 'partials/navigation.php';
    ?>
    </nav>
    <!--area1 starts from here-->
    <div id="area1">
           <h1>Welcome to Bloggify | Thanks for join Us</h1>
           <?php
                if(isset($flag)){
                echo '<h3 id="warning">'.$flag.'</h3>';
                }
            ?>
            <!--form for loging in a user-->
            <form action="" method="post">
                  <input type="email" name="email" placeholder="Enter Email" required >
                  <input type="password" name="password" placeholder="Enter Password"  required>
                   <button>Login</button>
            </form>
    </div>
    <!--footer starts from here-->
    <footer>
        <?php
             $page='index';
             include 'partials/footer.php';
        ?>
    </footer>
</body>
</html>