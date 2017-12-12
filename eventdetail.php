<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php $message=""; ?>
<?php

if (isset($_GET['eventid'])){
    $eventid=$_GET['eventid'];
    $event_detail = get_selected_event($eventid);

}else {
    $eventid=null;
    $event_detail=null;
    redirect_to('events.php');
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

    <?php
    if(isset($eventid)){

    while ($row=mysqli_fetch_assoc($event_detail))
    {
        $eventname = $row["eventname"];
        $eventcategory = $row["eventcategory"];
        echo"<div class=\"row vertical-center detailevent text-center\">
                <div class=\"col-md-12\">
                    <a href='events.php'><h1>".strtoupper($eventcategory)."</h1></a>
                </div>
               </div>";
        echo "<div class=\"row vertical-center eventdetailimage text-center\">
        <div class=\"col-md-12 event\">
            <img src=\"img/".$row["eventbanner"]."\">
        </div>
    </div>";

        echo "<div class=\"row vertical-center text-center\">
        <div class=\"col-md-12 event\">
            <h2>".$row["eventname"]."</h2>
            <hr>
            <h3>About</h3>
        </div>
    </div>";

        echo "<div class=\"row eventdetail text-center\">
        <div class=\"col-md-4 eventinfo\">
                    <h3 class='text-left'>Place : ".$row["eventplace"]."</h3>
                    <h3 class='text-left'>Start  : ".$row["start"]."</h4>
                    <h3 class='text-left'>Start  : ".$row["end"]."</h4>
                    <h3 class='text-left'>Cost  : ".$row["eventcost"]."</h4>
        </div>
        <div class=\"col-md-8 eventinfo\">
                    
                    <p style=\"font-size:20px; text-align: left; line-height:2.5em; \">".$row["eventabout"]."</p>
        </div>
            
    </div>";

        if($row["eventfeatures"]==""){
            $featurelist = null;
        } else {
            $featurelist = str_getcsv($row["eventfeatures"]);
        }


        if($featurelist <> null){
        echo "<div class=\"row text-center\">
           <div class=\"col-md-3\"></div>
            <div class=\"col-md-6\">
                <ul class=\"list-group\">";
        foreach ( $featurelist as $var ) {
            echo "<li class=\"list-group-item text-left\"><i class=\"fa fa-star\"></i>&nbsp &nbsp $var</li>";
        }

        echo "</ul>
            </div>
            <div class=\"col-md-3\"></div>
        </div>";

        }
        echo "<div class=\"row vertical-center text-center\">
        <div class=\"col-md-12 event\">
             <button href=\"#\" class=\"btn btn-info\" role=\"button\">Tickets</button>
              <button href=\"#\" class=\"btn btn-info\" role=\"button\">Share</button>
              <button href=\"#\" class=\"btn btn-info\" role=\"button\">Calender</button>
            
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
