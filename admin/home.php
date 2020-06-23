<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/simple-sidebar.css" type="text/css">

</head>
<body>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php include('sidebarnav.html')?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
        <div id="page-content-wrapper">

        <!-- this is collapsable nav  -->
            <nav class="navbar navbar-expand-lg navbar-light  border-bottom">
                <button class="btn btn-info" id="menu-toggle"><i class="fas fa-bars"></i></button>

        

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                </div>
            </nav>

            <!-- your content strarts from here create div and start writing code from here  -->

            <h2>hello manoj write everthing here OK?</h2>
        </div>

</div>




<script src="../js/master.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/d27006f8df.js" crossorigin="anonymous"></script>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
</html>