<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribution Network</title>
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
                        <h1>Distribution Network</h1>
                        <p class="text-muted">Admin/distribution</p>
                    </div>

                    <div class="pills-Section">
                             
                    <!-- pills begins from here  -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#distribution" role="tab" aria-controls="home" aria-selected="true">Add Dealer</a>
                       
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#vDistribution" role="tab" aria-controls="profile" aria-selected="false">View Dealer</a>
                        </li>
                       
                        
                    </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- add employees  -->
                            <div class="tab-pane fade show active" id="distribution" role="tabpanel" aria-labelledby="home-tab">
                                <h4 style="margin-top:30px;margin-left:20px;">Add Dealer</h4>
                                <div class="contents" style="padding:20px;">
                                    <label>Upload Image</label> <br>
                                    <input type="file" placeholder="Choose File"><br><br>

                                    <label for="">Add Name</label>
                                    <input type="text" class="form-control col-md-6"><br>

                                    <label for="">Add Location </label>
                                    <input type="text" class="form-control col-md-6"><br>
                                    
                                    <label for="">Contact No </label>
                                    <input type="text" class="form-control col-md-6"><br>

                                    <label for="">Add Owner Name</label>
                                    <input type="text" class="form-control col-md-6"><br>

                                    <label for="">Add Google map address</label>
                                    <input type="text" class="form-control col-md-6"><br>

                                    <button class="btn btn-info">Add Dealer</button>
                                </div>
                            </div>
                           

                            <!-- view employees  -->
                            <div class="tab-pane fade" id="vDistribution" role="tabpane1" aria-labelledby="view-eomployee">
                                <h4 style="margin-top:30px;margin-left:20px;">View Dealer</h4>

                                <div class="contents" style="padding:20px;">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Dealer Name</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Contact No</th>
                                            <th scope="col">Owner's Name</th>
                                            <th scope="col">EDIT | DELETE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                Some ABCD Suppliers
                                            </td>
                                            <td>Dhangadi, Nepal</td>
                                            <td>987238833</td>
                                            <td>Belal Khan</td>
                                            <td>
                                                <a data-toggle="tab" href="#distribution"><i class="fa fa-edit" style="font-size:larger;"></i></a>
                                                <span style="border: 1px solid black; margin: 5px 10px;"></span>
                                                <a href=""><i class="fas fa-trash-alt" style="font-size:larger;color:red;"></i></a>
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