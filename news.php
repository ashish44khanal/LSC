<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/master.css">
    <link rel="stylesheet" href="css/header.css">

</head>
<body>
    <?php include('header.html') ?>

    
<!-- head with search section  -->

<div class="headSearch">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="HeadersB">News & Event</h2>
            </div>
                <div class="col-md-4">
                    <div class="input-group mb-3" id="searchSection">
                        <input type="text" class="form-control" placeholder="What are you looking for?">
                        <div class="input-group-prepend">
                           <button class="input-group-text" id="search" style="background-color:#2D5F2E;color:white;"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- image highlight seciton  -->

<div class="imgHightlight">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <a href="newsDetails.php">
                    <img src="images/news.png" class="highlightImg" alt="">
                </a>
                
                <a href="newsDetails.php" class="normalA">
                    <h2 class="HeadersB">LSC has brought new seed in the market</h2>
                </a>
                <p class="mcf">20th Jan, 2020</p>
                <p class="text-muted newsHeadP">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has .....
                </p>
            </div>
            
            <div class="col-md-4">
                <div class="rencentH">
                    <h4 class="HeadersB">Recent News & Event</h4>

                    <!-- recent news section  -->

                    <Table class="table" style="margin-top:10px;">
                        <tr>
                            <td width="40%">
                                <a href="newsDetails.php"><img src="images/news.png" alt="" class="img-fluid"></a>
                            </td>
                            <td width="60%">
                                <a href="newsDetails.php" class="normalA"><h6 class="HeadersB">
                                Farmers has been 
                                noticed about the virus 
                                </h6></a>
                                <small class="text-muted">
                                <i class="far fa-clock"></i> <span>6 june, 2020</span>
                                </small>
                            </td>
                        </tr>

                        <tr>
                            <td width="40%">
                                <a href="newsDetails.php"><img src="images/news.png" alt="" class="img-fluid"></a>
                            </td>
                            <td width="60%">
                                <a href="newsDetails.php" class="normalA"><h6 class="HeadersB">
                                Farmers has been 
                                noticed about the virus 
                                </h6></a>
                                <small class="text-muted">
                                <i class="far fa-clock"></i> <span>6 june, 2020</span>
                                </small>
                            </td>
                        </tr>

                    </Table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- all news and event section  -->

<div class="allNews">
    <div class="container">
        <div class="allNewsType">
            <h3 class="HeadersB">All News & Event</h3>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="allNewsImg">
                    <a href="newsDetails.php">
                        <img src="images/card.png" alt="">
                    </a>
                </div>
                <div class="allNewsH">
                        <a href="newsDetails.php" class="normalA">
                        <h3 class="HeadersB">
                            News Headline Goes here 
                        </h3>                          
                        </a>
                    <p class="mcf">20th July, 2020</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="allNewsImg">
                    <img src="images/card.png" alt="">
                </div>
                <div class="allNewsH">
                    <h3 class="HeadersB">
                    Headline of the news goes here
                    </h3>
                    <p class="mcf">20th July, 2020</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="allNewsImg">
                    <img src="images/card.png" alt="">
                </div>
                <div class="allNewsH">
                    <h3 class="HeadersB">
                    Headline of the news goes here
                    </h3>
                    <p class="mcf">20th July, 2020</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="allNewsImg">
                    <img src="images/card.png" alt="">
                </div>
                <div class="allNewsH">
                    <h3 class="HeadersB">
                    Headline of the news goes here
                    </h3>
                    <p class="mcf">20th July, 2020</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="allNewsImg">
                    <img src="images/card.png" alt="">
                </div>
                <div class="allNewsH">
                    <h3 class="HeadersB">
                    Headline of the news goes here
                    </h3>
                    <p class="mcf">20th July, 2020</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="allNewsImg">
                    <img src="images/card.png" alt="">
                </div>
                <div class="allNewsH">
                    <h3 class="HeadersB">
                    Headline of the news goes here
                    </h3>
                    <p class="mcf">20th July, 2020</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="footer">
        <?php include('footer.html')?>
    </div>
    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/d27006f8df.js" crossorigin="anonymous"></script>

</body>
</html>