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
          <a href="http://www.whats-on.nl"><img style="max-width:175px; margin-top: 5px;" src="img/whatslogo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="events.php">Events</a></li>

            <li class="social"><a href="https://www.twitter.com/WhatsOnDelft"><i class="fa fa-twitter"></i></a></li>
            <li class="social"><a href="https://www.facebook.com/WhatsOnDelft"><i class="fa fa-facebook"></i></a></li>
            <li class="social"><a href="https://www.instagram.com/WhatsOnDelft"><i class="fa fa-instagram"></i></a></li>
            <li class="social"><a href="mailto:team@whats-on.nl?Subject=HomepageQuery" target="_top"><i class="fa fa-envelope"></i></a></li>


          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container-fluid" role="main">


      <?php
      $url = 'events.json'; // path to your JSON file
      $data = file_get_contents($url); // put the contents of the file into a variable
      $characters = json_decode($data, true); // decode the JSON feed
      ?>

      <div class="row">


        <?php
        foreach($characters AS $event){

          echo "<div class=\"col-md-4 panel panel-default panel-front\">";

          echo "<div class=\"panel-heading\">";

                  echo "<h4 class=\"panel-title\"><a HREF=\"#\"><img class=\"\" height='300px' width='300px' src=\"".$event['img_url']."\"></a></h4>";

                echo "</div><div class=\"panel-body\">";

                  echo "<h4>".strtoupper($event['event_name'])."</h4>";
          echo strtoupper($event['category'])." - ".date('jS F Y h:i:s A (T)', $event['start_date']);
          echo "<div class=\"text-right\">";
                    echo "<a href=\"#\" class=\"btn btn-info btn-sm\" role=\"button\">View Details</a>";
                  echo "</div>";

                echo "</div>";


              echo "</div>";








        /* echo "<div class=\"col-md-12\">";
        echo "<ul class=\"list-group\">";
          echo "<li class=\"list-group-item active text-center\">".$event['event_name']."</li>";
          echo "<li class=\"list-group-item\">".$event['ID']."</li>";
          echo "<li class=\"list-group-item\">".$event['category']."</li>";
          echo "<li class=\"list-group-item\">".$event['about_event']."</li>";
          echo "<li class=\"list-group-item\">".$event['address']."</li>";
          echo "<li class=\"list-group-item\">".date('jS F Y h:i:s A (T)', $event['start_date'])."</li>";
          echo "<li class=\"list-group-item\">".date('jS F Y h:i:s A (T)',$event['end_date'])."</li>";
          echo "<li class=\"list-group-item text-center\"><img src='".$event['img_url']."' height='300px' width='300px'/></li>";
          echo "<li class=\"list-group-item\">".$event['min_age']."</li>";
          echo "<li class=\"list-group-item\">".$event['price']."</li>";
          echo "<li class=\"list-group-item\"><a href=\"".$event['website']."\">".$event['website']."</a></li>";
          echo "<li class=\"list-group-item\">".date('jS F Y h:i:s A (T)', $event['update'])."</li>";
        echo "</ul></div><hr>"; */


          } ?>



        </div>
      </div>


<!--
      <div class="row">
        <div class="col-md-12">

      <pre>
        <?php //print_r($characters); ?>
      </pre>

        </div>
      </div>

-->




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
    <script src="js/whatson.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
