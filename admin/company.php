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
                        <h1>Companies Profile</h1>
                        <p class="text-muted">Admin/companies_profile</p>
                    </div>

                    <div class="pills-Section">
                             
                    <!-- pills begins from here  -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#employees" role="tab" aria-controls="home" aria-selected="true">Add Employees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#partners" role="tab" aria-controls="profile" aria-selected="false">Add Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#vEmployees" role="tab" aria-controls="profile" aria-selected="false">View Employees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#vPartners" role="tab" aria-controls="profile" aria-selected="false">View Partners</a>
                        </li>
                        
                    </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- add employees  -->
                            <div class="tab-pane fade show active" id="employees" role="tabpanel" aria-labelledby="home-tab">
                                <h4 style="margin-top:30px;margin-left:20px;">Add Employees</h4>
                                <div class="contents" style="padding:20px;">
                                    <label>Upload Image</label> <br>
                                    <input type="file" placeholder="Choose File"><br><br>

                                    <label for="">Add Name</label>
                                    <input type="text" class="form-control col-md-6"><br>

                                    <label for="">Add Employee Position in Organization</label>
                                    <input type="text" class="form-control col-md-6"><br>

                                    <button class="btn btn-info">Add Employee</button>
                                </div>
                            </div>
                            <!-- add partners -->
                            <div class="tab-pane fade" id="partners" role="tabpanel" aria-labelledby="profile-tab">
                                <h4 style="margin-top:30px;margin-left:20px;">Add Partner</h4>
                                    <div class="contents" style="padding:20px;">
                                        <label>Upload Parner Logo</label> <br>
                                        <input type="file" placeholder="Choose File"><br><br>

                                        <button class="btn btn-info">Add Partern</button>
                                    </div>
                            </div>

                            <!-- view employees  -->
                            <div class="tab-pane fade" id="vEmployees" role="tabpane1" aria-labelledby="view-eomployee">
                                <h4 style="margin-top:30px;margin-left:20px;">View Employee</h4>

                                <div class="contents" style="padding:20px;">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Employee</th>
                                            <th scope="col">Employee Name</th>
                                            <th scope="col">Position</th>
                                            <th scope="col">EDIT | DELETE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <img src="../images/team.png" alt="" style="width:50px;">
                                            </td>
                                            <td>Elon Musk</td>
                                            <td>CEO</td>
                                            <td>
                                                <a data-toggle="tab" href="#employees"><i class="fa fa-edit" style="font-size:larger;"></i></a>
                                                <span style="border: 1px solid black; margin: 5px 10px;"></span>
                                                <a href=""><i class="fas fa-trash-alt" style="font-size:larger;color:red;"></i></a>
                                            </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- view partners -->
                            <div class="tab-pane fade" id="vPartners" role="tabpane1" aria-labelledby="view-partners">
                            <h4 style="margin-top:30px;margin-left:20px;">View Partner</h4>

                                
                                <div class="contents" style="padding:20px;">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Partner</th>
                                            <th scope="col">EDIT | DELETE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <img src="../images/LOGO1.png" alt="" style="width:50px;">
                                            </td>
                                            <td>
                                                <a data-toggle="tab" href="#partners"><i class="fa fa-edit" style="font-size:larger;"></i></a>
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