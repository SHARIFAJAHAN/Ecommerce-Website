<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>Ecommerce Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body >
         <?php
        include 'includes/header.php';
        ?>
        
        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Online Store</h1>
                            <br>
                            <br>
							<button class="btn btn-default btn-lg active" data-toggle="modal" data-target="#loginmodal">Shop Now</button>
                    </center>
                </div>
            </div>
           
            <div class="container text-center">
			<div class="container11">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <center>
                                
                            <h2 style="color:grey"><b>We have many brands</b></h2>
                        </center>
                        </div>

                    

                         
						 <div class="col-sm-4">
                            
                               <div class="thumbnail">
                                   
                                <img src="img/1.jpg" alt="iphone se" >
                                        <div class="caption">
                                          <h3>Apple iPhone SE 2020</h3>
                                        <p>Price:Rs.36,000</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                            </a>
                        </div>
						</div>
						
						<div class="panel-body">
						<div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="img/1.png" alt="saree" >
                                        <div class="caption">
                                        <h3>Chiffon Saree</h3>
                                        <p>Price:Rs.300</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>
						
						
						
						<div class="col-sm-4">
                            
                               <div class="thumbnail">
                                   
                                <img src="img/3.png" alt="iphone se" >
                                        <div class="caption">
                                          <h3>Silk Saree</h3>
                                        <p>Price:Rs.400</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>
						<div class="col-sm-4">
                           
                               <div class="thumbnail">
                                    <img src="img/5.jpg" alt="iphone 11 pro" >
                                        <div class="caption">
                                           <h3>Apple iPhone 11 Pro</h3>
                                        <p>Price:Rs. 1,10,000.00</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                </div>
            </div>
			</div>
           
            </div>
			</div>
        
<?php
include 'includes/footer.php';
?>
    </body>
</html>
