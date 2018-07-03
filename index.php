<?php include 'includes/header.php'; ?>

 <div id="content">
  <h3></h3>
  <?php
    if (isset($_GET['about']))
     {
include 'includes/about.php';
}else if (isset($_GET['products'])) {
include 'includes/products.php';
}else if (isset($_GET['blog'])){
include 'includes/blog.php';
} else if (isset($_GET['contact']))
{
include 'includes/contact.php';
}
else  
  {
    include 'includes/home.php';
}
  ?>
 </div>

 <?php include 'includes/footer.php'; ?>


 

</body>
</html>