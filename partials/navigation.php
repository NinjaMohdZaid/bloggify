<?php
  //This is the navigation bar of the website
  //in this page we have to require a page number name which is stored in the $page variable
  //Date 7/18/2021
  if($page=='index')
  {
    echo '<a href="" id="logo">Bloggify</a><div><a href="" id="a1">Home</a><a href="phpFiles/about.php" id="a2">About Us</a><a href="phpFiles/signUp.php" id="a4">Sign Up</a></div>';
  }
  if($page=='unlogin')
  {
    echo '<a href="" id="logo">Bloggify</a><div><a href="../index.php" id="a1">Home</a><a href="../phpFiles/about.php" id="a2">About Us</a><a href="../phpFiles/signUp.php" id="a4">Sign Up</a></div>';
  }
  if($page=='login')
  {
    echo '<a href="" id="logo">Bloggify</a><div><a href="../index.php" id="a1">Home</a><a href="../phpFiles/postBlog.php" id="a2">Post Blog</a><a href="../phpFiles/postedBlogs.php" id="a3">Your Blogs</a><a href="../phpFiles/recycleBin.php" id="a4">Recycle Bin</a><a href="../partials/logout.php" id="a5">Logout</a></div>';
  }

?>