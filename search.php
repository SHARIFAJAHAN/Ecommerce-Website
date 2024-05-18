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
		<h2><font color="blue"><center>Sarees Available</font></center></h2>
		<div class="container-fluid"><br><br><br>
			<div class="row">

                        

                         
                    </div>
				</div>
				
				<div class="container-fluid">
			<div class="row">
                        

                        

                         <div class="col-sm-4">
							<div class="panel panel-default">
							
								<div class="thumbnail">
                                    <img src="img/3.png">
                                        <div class="caption">
											<p>Silk saree party wear Rs.500</p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} else {
											?>
											<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                                    <img src="img/4.png">
                                        <div class="caption">
											<p>Pure Chiffon saree Rs.900</p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											} else {
											?>
											<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        

                        
						
                    </div>
				</div>
        
        
    </body>
</html>