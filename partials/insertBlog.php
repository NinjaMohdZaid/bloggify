<?php
// <!--user Interface for posting blog-->
// <!--23/07/2021-->
//post method action
   session_start();
   $email=$_SESSION['email'];
   require '../partials/dbmsConfig.php';
   if($_SERVER['REQUEST_METHOD']=='POST')
   {   
       //upload image section
      if(isset($_FILES['image']['name'])){
             $image_name = $_FILES['image']['name'];
             $tmp = explode('.', $image_name);
             $file_extension = end($tmp);
             //Rename the Image 
             $imageName = "img_".rand(000, 9999999999).".".$file_extension;
             $source_path = $_FILES['image']['tmp_name'];
             $destination_path = "../images/".$imageName;
             //Finally Upload the Image
             $upload = move_uploaded_file($source_path, $destination_path);
       $category=$_POST['category'];
       $title=$_POST['title'];
       $description=$_POST['description'];
       $sql1="INSERT INTO `blogs`(`sno`,`email`,`image`, `category`, `title`, `description`, `date`,`views`,`isRecycle`) VALUES (NULL,'$email','$imageName','$category','$title','$description',CURDATE(),'0','no')";
       $result1=mysqli_query($connect,$sql1);
       if($result1)
       {
         //category added
         header('Location:../phpFiles/postBlog.php?flag=1');
       }
       else{
           //category not added
           header('Location:../phpFiles/postBlog.php?flag=0');
       }
    }
    else
    {
        echo 'problem in code';
    }
}
?>