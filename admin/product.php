<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies Profile</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
    
<div class="sidebar">
<?php include('sidebarNav.html') ?>
</div>
    <div class="home">
        <div class="homeContent">
            <div class="container" style="padding-left:140px;">
                    <div class="topSections">
                        <h1>Product Portfolio</h1>
                        <p class="text-muted">Admin/product</p>
                    </div>

                    <div class="pills-Section">
                             
                    <!-- pills begins from here  -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#category" role="tab" aria-controls="home" aria-selected="true">Add Catgory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#product" role="tab" aria-controls="profile" aria-selected="false">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#vProduct" role="tab" aria-controls="profile" aria-selected="false">View Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#vOrder" role="tab" aria-controls="profile" aria-selected="false">View Orders</a>
                        </li>
                        
                    </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- add category  -->
                            <div class="tab-pane fade show active" id="category" role="tabpanel" aria-labelledby="home-tab">
                                <h4 style="margin-top:30px;margin-left:20px;">Add Category</h4>
                                <div class="contents" style="padding:20px;">
                                   

                                    <label for="">Add Category</label>
                                    <input type="text" class="form-control col-md-6"><br>

                                   

                                    <button class="btn btn-info">Add Category</button>
                                </div>
                            </div>
                            <!-- add product -->
                            <div class="tab-pane fade" id="product" role="tabpanel" aria-labelledby="profile-tab">
                                <h4 style="margin-top:30px;margin-left:20px;">Add Product</h4>
                                <div class="container">
                                        <label><b>Upload Product Highlight Image (250*250)</b></label> <br>
                                        <input type="file" placeholder="Choose File"><br><br>

                                        <p><b><i>Sub Images</i></b></p>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="file" placeholder="Choose File">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="file" placeholder="Choose File">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="file" placeholder="Choose File">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="file" placeholder="Choose File">
                                            </div>
                                        </div> <br>

                                        <label for="">Product Code</label>
                                        <input type="text" class="form-control col-md-3"> <br>

                                        <label for="">Product Name</label>
                                        <input type="text" class="form-control col-md-6"> <br>

                                        <label>Select Category</label><br>
                            
                                        <select class="selectpicker">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select> <br><br>

                                        <label for="">Product Price</label>
                                        <input type="text" class="form-control col-md-3"><br>

                                        <label for="">Product Description</label>
                                        <textarea class="form-control" name="" id="" cols="20" rows="10"></textarea>

                                        <button class="btn btn-info">Add Product</button>
                                </div>
                                    
                            </div>

                            <!-- view product  -->
                            <div class="tab-pane fade" id="vProduct" role="tabpane1" aria-labelledby="view-eomployee">
                                <h4 style="margin-top:30px;margin-left:20px;">View Employee</h4>

                                <div class="contents" style="padding:20px;">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th>P code</th>
                                            <th scope="col">P Img</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">EDIT | DELETE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>023PE</td>
                                            <td>
                                                <img src="../images/p1.jpg" alt="" style="width:50px;">
                                            </td>
                                            <td>Dhan 233</td>
                                            <td>
                                                My Category
                                                <a data-toggle="tab" href="#category"><i class="fa fa-edit" style="font-size:larger; padding-left:5px;"></i></a>
                                            </td>
                                            <td>
                                                <a data-toggle="tab" href="#product"><i class="fa fa-edit" style="font-size:larger;"></i></a>
                                                <span style="border: 1px solid black; margin: 5px 10px;"></span>
                                                <a href=""><i class="fas fa-trash-alt" style="font-size:larger;color:red;"></i></a>
                                            </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- view partners -->
                            <div class="tab-pane fade" id="vOrder" role="tabpane1" aria-labelledby="view-partners">
                            <h4 style="margin-top:30px;margin-left:20px;">View Partner</h4>

                                
                                <div class="contents" style="padding:20px;">

                                   <!-- new order starts  -->

                                    <table class="table table-striped">
                                        <p><b>New Order</b></p>
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Order Amount</th>
                                            <th scope="col">View Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <img src="../images/p2.jpg" alt="" style="width:50px;">
                                            </td>
                                            <td>
                                                Product one
                                            </td>
                                            <td>
                                                58 KG
                                            </td>
                                            <td>
                                                <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">View Details</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="text-muted">
                                                                Orderd Person
                                                            </p>
                                                            <h4>
                                                                Aashish Khanal
                                                            </h4>
                                                            <p class="text-muted">
                                                                Address
                                                            </p>
                                                            <h4>
                                                                Maitidevi, kathmandu
                                                            </h4>
                                                            <p class="text-muted">
                                                                Contact Number
                                                            </p>
                                                            <h4>
                                                                9856723823
                                                            </h4>
                                                            <p class="text-muted">
                                                                Email Address
                                                            </p>
                                                            <h4>
                                                                aashish24khaanal@gamil.com
                                                            </h4>
                                                            <p class="text-muted">
                                                                Order Amount
                                                            </p>
                                                            <h4>23kg</h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Delivered Order</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                            </tr>
                                            
                                        </tbody>
                                        
                                    </table>

                                    <!-- previous order starts  -->

                                    <table class="table table-striped">
                                        <!-- new order starts  -->


                                        <p><b><i>Previous Order</b></i></p>
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Order Amount</th>
                                            <th scope="col">View Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <img src="../images/p2.jpg" alt="" style="width:50px;">
                                            </td>
                                            <td>
                                                Product one
                                            </td>
                                            <td>
                                                58 KG
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">View Details</button>
                                            </td>
                                            </tr>
                                            
                                        </tbody>
                                        
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="https://kit.fontawesome.com/d27006f8df.js" crossorigin="anonymous"></script>
</body>
</html>