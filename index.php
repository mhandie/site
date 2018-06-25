<?php include'includes/header.php'; ?>

      <div id="content">
  

      <main role="main" class="bg">
        <h1 class="cover-heading">Hi There</h1>
        <p class="lead">I’m a Front End Developer, A young Entrepreneur, An Economist And an Actress.
Founder of Shoppers, host of the Let's Talk Dishes, and manager of AnD Production.
</p>
        <p class="lead">
          <a href="index.php?about" class="btn btn-lg btn-secondary">Learn more about <b>ME</b></a>
        </p>
      </main>
      </div>
 

      	<?php
        if(isset($_GET['about'])) {
        	include 'includes/about.php';
       }else if (isset($_GET['product'])) {
       	include 'includes/product.php';
       }else if (isset($_GET['blog'])) {
       	include 'includes/blog.php';
       }else if (isset($_GET['contact'])) {
       	include 'includes/contact.php';
       }else {
       	include 'includes/home.php';
       }
         
      	?>
      </div>
        

<?php include'includes/footer.php'; ?>

      