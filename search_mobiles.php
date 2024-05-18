<?php
require("includes/common.php");
?>
<html>
    <head>
        <title>E-Store|Products</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
		<br>
		<br>
		<br>
        <h4><a href="search.php">Sarees</a></h4>
		<h4><a href="search_mobiles.php">Mobiles</a></h4>
		<h4><a href="search_makeupkit.php">Makeup Kit</a></h4>
		<h2><font color="blue"><center>Mobiles Available</font></center></h2>
		<div class="container-fluid"><br><br><br>
			<div class="row">
                        

                       

                         <div class="col-sm-4">
							<div class="panel panel-default">
							
								<div class="thumbnail">
                                    <img src="img/12.jpg">
                                        <div class="caption">
											<p>Apple iPhone SE 2020 64 GB. Rs.36,000</p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} else {
											?>
											<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
                    </div>
				</div>
				
				<div class="container-fluid">
			<div class="row">
                        

                        <div class="col-sm-4">
							<div class="panel panel-default">
							
								<div class="thumbnail">
                                    <img src="img/2.jpg">
                                        <div class="caption">
											<p>Apple iPhone XS 64 GB. Rs.88,000</p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} else {
											?>
											<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 8</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/5.jpg">
                                        <div class="caption">
											<p>Apple iPhone 11 Pro 64 GB. Rs.1,10,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 9</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/6.jpg">
                                        <div class="caption">
											<p>Apple iPhone 11 Pro Max 64 GB. Rs.1,30,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>

                         <div class="col-sm-4">
							
                        </div>
                    </div>
				</div>
					
				
        
        
    </body>
</html>