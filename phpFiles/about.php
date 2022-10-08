<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssFiles/about.css">
    <title>About | Bloggify</title>
</head>
<body>
    <!--navigation starts from here-->
   <nav>
    <?php
        $page='unlogin';
        require '../partials/navigation.php';
    ?>
    </nav>
    <!-- area1 starts from here-->
   <div id="area1">
      <div id="area1a">
         <p>Thousand of blog posted everyday on Bloggify.<br>Join Bloggify to post your blogs on many <br>Categories by amazing creators.</p>
      </div>
      <div id="area1b">
       <img src="https://source.unsplash.com/1600x900/?nature,water,laptop,mobile,coding" alt="Image Not Loaded">
      </div>
   </div>
   <div id="area2">
       <h3>About Us</h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim alias consequatur vero corporis commodi reprehenderit dolores consequuntur odio ullam deleniti accusamus quam odit nisi debitis quidem doloremque, incidunt voluptates eaque obcaecati quibusdam? Eos, facilis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, pariatur id neque, ea voluptatibus vitae quod veritatis veniam necessitatibus a sunt facilis numquam aspernatur voluptates reiciendis quia sequi laudantium quo. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id nobis eum autem quia iure! Repudiandae odit sit, sequi, dolorum quas optio veniam minima aliquam recusandae illo, quia amet similique nostrum.</p>
   </div>
 <!-- area2 starts from here -->
 <div id="area3">
     <h3>Many Interesting blog categories are here</h3>
     <div id="area3a">
         <div class="area3a1"><img src="https://source.unsplash.com/1600x900/?clothes,shoes,jeans,shirts" alt="Image Not Loaded"><h4>Fashion</h4><P>A fashion blog can cover many things such as specific items of clothing and accessories, beauty tips, trends in various apparel markets , celebrity fashion choices and street fashion trends. They cover fashion at all levels from the largest fashion design houses to the smallest independent designers.</P></div>
         <div class="area3a1"><img src="https://source.unsplash.com/1600x900/?hair,shampoo," alt="Image Not Loaded"><h4>Beauty Product</h4><P>Beauty bloggers have tons of knowledge about hair, makeup, skincare and fashion. ... They blog about makeup, hair styles, skincare products, outfits and pretty much anything else that falls under the category of “beauty.” They take photos of hair and makeup, so some knowledge of lighting and photography is important.</P></div>
         <div class="area3a1"><img src="https://source.unsplash.com/1600x900/?technology,coding" alt="Image Not Loaded"><h4>Technology</h4><P>Technical blogging is a great way to share your expertise while building a potentially valuable readership. It can help you to document projects, or provide guidance to other web users. </P></div>
         <div class="area3a1"><img src="https://source.unsplash.com/1600x900/?nature,water,city" alt="Image Not Loaded"><h4>Travel</h4><P>A travel blogger, also known as travel writer or just as “blogger”, is someone who travels around the world collecting material for writing about their travel experiences, deriving income from a variety of on-line and off-line sources.</P></div>
     </div>
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