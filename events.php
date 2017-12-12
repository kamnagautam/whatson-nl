<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php $message=""; ?>
<?php

if (isset($_GET['cat'])){
    $category=$_GET['cat'];
    $event_set = get_selected_category_events($category);

}else {
    $category=null;
    $event_set=null;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Events-Whats-on</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/whatson.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!-- fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#"><img style="max-width:175px; margin-top: 5px;" src="img/whatslogo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="active"><a href="events.php">Events</a></li>

                <li class="social"><a href="https://www.twitter.com/WhatsOnDelft"><i class="fa fa-twitter"></i></a></li>
                <li class="social"><a href="https://www.facebook.com/WhatsOnDelft"><i class="fa fa-facebook"></i></a></li>
                <li class="social"><a href="https://www.instagram.com/WhatsOnDelft"><i class="fa fa-instagram"></i></a></li>
                <li class="social"><a href="mailto:team@whats-on.nl?Subject=HomepageQuery" target="_top"><i class="fa fa-envelope"></i></a></li>


            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container-fluid theme-showcase" role="main">


    <?php if($category==null){
    echo "
    <div class=\"row vertical-center eventlist text-center\">
        <div class=\"col-md-12\">
            <a href='events.php?cat=social'><h1>SOCIAL</h1></a>
        </div>
    </div>
    <div class=\"row vertical-center eventlist text-center\">
        <div class=\"col-md-12\">
            <a href='events.php?cat=activity'><h1>ACTIVITY</h1></a>
        </div>
    </div>
    <div class=\"row vertical-center eventlist text-center\">
        <div class=\"col-md-12\">
            <a href='events.php?cat=education'><h1>EDUCATION</h1></a>
        </div>
    </div>
    <div class=\"row vertical-center eventlist text-center\">
        <div class=\"col-md-12\">
            <a href='events.php?cat=career'><h1>CAREER</h1></a>
        </div>
    </div>";

    } ?>


    <?php
    if(isset($category)){

    while ($row=mysqli_fetch_assoc($event_set))
    {
        echo"<div class=\"row vertical-center backevent text-center\">
                <div class=\"col-md-12\">
                    <a href='events.php'><h1>EVENTS - ".strtoupper($category)."</h1></a>
                </div>
               </div>";
        echo "<div class=\"row vertical-center eventthumbs text-center\">
        <div class=\"col-md-6 event\">
            <img src=\"img/".$row["eventbanner"]."\">
                <div class=\"\">
                    <h4 class=\"panel-title\"></h4>
                </div>
                <div class=\"\">
                    <h3>".$row["eventname"]."</h3>
                    <h5>".$row["start"]."</h5>
                    <a href=\"eventdetail.php?eventid=".$row["id"]."\" class=\"flat-butt flat-primary-butt\" role=\"button\">Event Details</a>
                </div>
            </div>
        </div>
    </div>";
    }

    }

    ?>





    <div style="background-color: #262624" class="row footer text-center">

        <h6 style="color: #e5e5e5;">Copyright Envention Labs 2017</h6>

    </div>










</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
