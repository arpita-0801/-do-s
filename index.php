<?php
    include './includes/common.php';
    if(isset($_SESSION['email'])){
        header("location:home.php");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/links.php'; ?>
    <title>Lifestyle store</title>
</head>
<body>
    <?php
            include './includes/header.php';
     ?>
    
      <div class="banner-image">
      <div class="inner-banner">
      <div class="banner_content">
          
          <a href="home.php"><button class="btn-danger btn-lg active">Shop now</button></a>
  </div>
</div>
 </div>
    
    
    
   <?php
        include './includes/footer.php';
    ?> 
    
</body>
</html>