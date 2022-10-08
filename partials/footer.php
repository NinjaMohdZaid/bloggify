<?php
//This is the navigation bar of the website
  //in this page we have to require a page number name which is stored in the $page variable
  //Date 8/18/2021
  if($page=='index')
  {
  echo '<div id="footer1">
        <h3>Bloggify</h3>
        <p>
          Bloggify is the Social Blog Site Where<br> 
          You Can find and read the Blogs of diffrent<br> 
          Categories like Beauty,Fashion,Technology,Food,<br>
          Travel and Many More categories 
        </p>
        </div>
        <div id="footer2">
            <div id="footer2a">
            <div class="footer2a1"><h4>Services</h4><a href="index.php">Bloggify<a></div>
            <div class="footer2a1"><h4>Community</h4><a href="phpFiles/adminPanel.php">Admin Panel</a></div>
            <div class="footer2a1"><h4>Links</h4><a href="phpFiles/signUp.php">Sign Up</a></div>
            </div>
            <div id="footer2b"><a href=""><img src="icons/facebook.png" alt="facebook"></a><a href=""><img src="icons/email.png" alt="Email"></a><a href="tel:+918178719078"><img src="icons/call.png" alt="Call"></a></div>
        </div>';
  }
if($page=='unlogin')
{
  echo '<div id="footer1">
        <h3>Bloggify</h3>
        <p>
          Bloggify is the Social Blog Site Where<br> 
          You Can find and read the Blogs of diffrent<br> 
          Categories like Beauty,Fashion,Technology,Food,<br>
          Travel and Many More categories 
        </p>
        </div>
        <div id="footer2">
            <div id="footer2a">
            <div class="footer2a1"><h4>Services</h4><a href="../index.php">Bloggify<a></div>
            <div class="footer2a1"><h4>Community</h4><a href="adminPanel.php">Admin Panel</a></div>
            <div class="footer2a1"><h4>Links</h4><a href="signUp.php">Sign Up</a><a href="../index.php">Sign In</a></div>
            </div>
            <div id="footer2b"><a href=""><img src="../icons/facebook.png" alt="facebook"></a><a href=""><img src="../icons/email.png" alt="Email"></a><a href="tel:+918178719078"><img src="../icons/call.png" alt="Call"></a></div>
        </div>';
}
if($page=='login')
{
  echo '<div id="footer1">
        <h3>Bloggify</h3>
        <p>
          Bloggify is the Social Blog Site Where<br> 
          You Can find and read the Blogs of diffrent<br> 
          Categories like Beauty,Fashion,Technology,Food,<br>
          Travel and Many More categories 
        </p>
        </div>
        <div id="footer2">
            <div id="footer2a">
            <div class="footer2a1"><h4>Services</h4><a href="../index.php">Bloggify<a></div>
            <div class="footer2a1"><h4>Community</h4><a href="adminPanel.php">Admin Panel</a></div>
            <div class="footer2a1"><h4>Links</h4><a href="../phpFiles/postBlog.php">Post Blog</a><a href="../phpFiles/recycleBin.php">Recycle Bin</a><a href="../phpFiles/postedBlogs.php">Your Blogs</a><a href="../partials/logout.php">Logout</a></div>
            </div>
            <div id="footer2b"><a href=""><img src="../icons/facebook.png" alt="facebook"></a><a href=""><img src="../icons/email.png" alt="Email"></a><a href="tel:+918178719078"><img src="../icons/call.png" alt="Call"></a></div>
        </div>';
}

?>