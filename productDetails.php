<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/master.css">
    <link rel="stylesheet" href="css/header.css">

</head>
<body>

<?php include('header.html') ?>

<div class="productDetails">
    <div class="container">
        <div class="row">

            <!-- product image section  -->
            <div class="col-md-5">
            <!-- The expanding image container -->
                <div class="container img-container">
                    <!-- Expanded image -->
                    <img id="expandedImg" style="width:100%" src="images/p4.jpg">
                </div>

                                                
                    <!-- The grid: four columns -->
                    <div class="container sample-img">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <img src="images/p1.jpg" alt="Nature" class="img-fluid" onclick="myFunction(this);">
                            </div>
                            <div class="col-md-3 col-3">
                                <img src="images/p2.jpg" alt="Snow" class="img-fluid" onclick="myFunction(this);">
                            </div>
                            <div class="col-md-3 col-3">
                                <img src="images/p3.jpg" alt="Mountains" class="img-fluid" onclick="myFunction(this);">
                            </div>
                            <div class="col-md-3 col-3">
                                <img src="images/p5.jpg" alt="Lights" class="img-fluid" onclick="myFunction(this);">
                            </div>
                        </div>
                    </div>
            </div>

            <!-- product details section  -->
            <div class="col-md-7">
                <div class="top">
                    <h2 class="HeadersB">
                        Name Of Product 
                    </h2>
                    <h6 style="float:left;padding-right:10px;">Status :</h6>
                    <i class="mcf">Available</i>
                </div>

                <div class="main">
                        <h2 style="color:#D1495B;font-weight:bold;float:left;padding-right:10px;">Rs.</h2>
                        <h2 style="color:#D1495B;font-weight:bold;">250</h2>

                        <p class="description text-muted">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                </div>

                <div class="pbtns">
                    <div class="row align-items-start">
                        <div class="col-md-4 QTY ">
                            <h5 style="float:left;Padding-right:10px;">QTY</h5>
                            <input type="text" class="form-control col-md-6">
                        </div>
                        <div class="col-md-4">
                           <a href="productOrder.php"><button class="orderBtn">Order Now</button></a>
                        </div>
                        <div class="col-md-4 ">
                            <button class="cartBtn">
                            Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="codes">
                    <h6 class="HeadersB" style="float:left;padding-right:10px">Code :</h6>
                    <h6 class="text-muted">2032aw</h6>
                    <h6 class="HeadersB" style="float:left;padding-right:10px">Category :</h6>
                    <h6 class="text-muted">category one</h6>
                </div>

                <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=large&width=77&height=28&appId"
                     width="77" 
                     height="40" 
                     style="border:none;overflow:hidden" 
                     scrolling="no" 
                     frameborder="0" 
                     allowTransparency="true" 
                     allow="encrypted-media">
                </iframe>
            </div>
        </div>
    </div>
</div>

<!-- suggested products  -->
<div class="suggestedProduct">
<div class="exploreProduct">
        <div class="container">
            <h3 class="HeadersB">Suggested Products</h3>
            <a href="product.php"><h6 style="font-style:italic;color:#2D5F2E">View All</h6></a>
            <div class="row" style="margin-top:20px;">

                <div class="col-md-3 col-6">
                    <div class="cardImg">
                        <img src="images/product.png" alt="myproduct">
                    </div>
                    <div class="cardDes">
                        <h5 class="HeadersB">Seed Product Rice w23</h5>
                        <p> category / available</p>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="cardImg">
                        <img src="images/product.png" alt="myproduct">
                    </div>
                    <div class="cardDes">
                        <h5 class="HeadersB">Seed Product Rice w23</h5>
                        <p> category / available</p>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="cardImg">
                        <img src="images/product.png" alt="myproduct">
                    </div>
                    <div class="cardDes">
                        <h5 class="HeadersB">Seed Product Rice w23</h5>
                        <p> category / available</p>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="cardImg">
                        <img src="images/product.png" alt="myproduct">
                    </div>
                    <div class="cardDes">
                        <h5 class="HeadersB">Seed Product Rice w23</h5>
                        <p> category / available</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


 <script src="bootstrap/js/bootstrap.min.js"></script>
 <script src="js/master.js"></script>
<script src="https://kit.fontawesome.com/d27006f8df.js" crossorigin="anonymous"></script>
   
</body>
</html>