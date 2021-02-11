<?php
    include './includes/common.php';
     
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
             include './includes/check_if_added.php';
            
              
       ?>
    
    <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                      //  echo "<h3 class='text-center'>Welcome $email</h3>";
                    ?>
               
        <h1>Welcome to our Lifestyle Store!” </h1>
        <p>We have the best cameras,watches and shirts for you.No need to hunt around,We have all in one place</p>
                   </div>
                
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/5.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                            <h3>Cannon EOS</h3>
                            <p>Price:Rs.36000.00</p>
                            
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                
                                <?php
                             } else {
                                if(check_if_added_to_cart(1)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary"> Add To Cart</a>
                                <?php }
                             } ?>
                                        
                            </div>
                        </div>
                    </div>
                    
                    
               <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/2.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                           
                            <h3>Sony DSLR</h3>
                            <p>Price:Rs.40000.00</p>
                            
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                
                                <?php
                            } else {
                                if(check_if_added_to_cart(2)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php }  } ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/3.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                            <h3>Sony DSLR</h3>
                            <p>Price:Rs.50000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                
                                
                                <?php
                            } else { 
                                if(check_if_added_to_cart(3)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } } ?>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/4.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                            <h3>Olympus DSLR</h3>
                            <p>Price:Rs.80000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                
                            
                                <?php 
                            } else { if(check_if_added_to_cart(4)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } } ?>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/111.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                             <h3>Titan Model#301</h3>
                            <p>Price:Rs.1300000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                
                                
                                <?php
                            } else { if(check_if_added_to_cart(5)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } } ?>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/112.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                             <h3>Titan Model#201</h3>
                            <p>Price:Rs.30000.00</p>
                               <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 
                                <?php
                               } else { if(check_if_added_to_cart(6)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                               <?php } } ?>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/113.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                            <h3>HMT Milan</h3>
                            <p>Price:Rs.80000.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                   
                             <?php } else {  if(check_if_added_to_cart(7)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                             <?php }} ?>
                            </div>
                        </div>
                    </div>
                
                    
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/114.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                            <h3>Fabar Luba#111</h3>
                            <p>Price:Rs.18000.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                   
                             <?php } else { if(check_if_added_to_cart(8)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                             <?php } } ?>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/13.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                           <h3>H&W</h3>
                            <p>Price:Rs.800.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                
                                <?php } else {  if(check_if_added_to_cart(9)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } }?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/12.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                            <h3>Luis Phil</h3>
                            <p>Price:Rs.1000.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                
                                <?php } else { if(check_if_added_to_cart(10)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } } ?>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/11.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                            <h3>John Zok</h3>
                            <p>Price:Rs.1500.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                
                                <?php }
                                else {
                                    if(check_if_added_to_cart(11)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } } ?>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                  <img src="img/14.jpg" class="img-responsive " alt=""></div>
                            <div class="panel-footer">
                            <h3>Jhalsani</h3>
                            <p>Price:Rs.1500.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                  
                              <?php } else { if(check_if_added_to_cart(12)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Add To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                              <?php } }?>
                            </div>
                        </div>
                    </div>
                    
                    </div>
            </div>
        </div>
    
        <?php
        include './includes/footer.php';
    ?>
   
</body>
</html>
                
        