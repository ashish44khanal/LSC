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

<!-- news details starts  -->
<div class="newsDetails">
    <div class="container">
    <img src="images/news.png" alt="" style="float:left;padding:0 30px 20px 0;">
    <h2 class="HeadersB">
        News Heading goes here like this 
    </h2>
    <i class="far fa-clock"></i> <span>6 june, 2020</span>
    <p class="mute-text" style="padding-top:30px;">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,24 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,24 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
    
    </p>

    </div>
</div>

<!-- facebook share  -->
<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=large&width=77&height=28&appId"
                     width="77" 
                     height="40" 
                     style="border:none;overflow:hidden" 
                     scrolling="no" 
                     frameborder="0" 
                     allowTransparency="true" 
                     allow="encrypted-media">
                </iframe>

<!-- moreNewsSection starts  -->


<div class="allNews">
    <div class="container">
        <div class="allNewsType">
            <h3 class="HeadersB">More News & Events</h3>
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

        </div>
    </div>
</div>
    

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/d27006f8df.js" crossorigin="anonymous"></script>

</body>
</html>