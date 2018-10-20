<?php

if (isset($_POST['newCookie']))
{
	$cookie_name = "authKey";
	$cookie_value = "CR261-executive-injury-drive";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	echo "<h2 align='center'> authKey Cookie SET! </h2>";
}

if (isset($_POST['outputCookie']))
{
	if(isset($_COOKIE['authKey']))
	{
		echo "<h2 align='center'> authKey Cookie: ".$_COOKIE['authKey']."</h2>";
	}
	else
	{
		echo "<h2 align='center'> authKey Cookie: NOT SET </h2>";
	}
}

$servername = "localhost";
$username = "ahmed";
$password = "123";
$dbname = "xss3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['clear']))
{
	$sql = "TRUNCATE TABLE comments";
	if ($conn->query($sql) === TRUE)
	{
		echo "Table Cleared";
	} else {
		echo "Error: Unable to Clear Table". $conn->error;
	}
}

if (isset($_POST['comment']))
{
	$sql = "INSERT INTO comments (comment)
	VALUES ('".addslashes($_POST['comment'])."')";
}

?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<!-- <html class="no-js" lang=""> -->
 <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dvergar</title>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta name="description" content="">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">





    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="primary">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Dvergar-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="index.html" id="logo">
                  <img src="img/dvergar_logo.png" alt="" height="32" width="160">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="Dvergar-nav">
              <ul class="nav navbar-nav navbar-right">
								<li><a href="index.html">Home</a></li>
								<li><a href="careers.html">Campany & Career</a></li>
								<li><a href="strategy.html">Strategy</a></li>
								<li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>


      <!--Start Header -->
      <div class="header2">
        <img src="img/teens-629046_1920.jpg" alt="" class="" no-repeat top center>
        <div class="overlay">
          <div class="container">
            <div class="row centered-vh">
              <div class="col-md-4">
                <!-- <form class="center-block">
                  <h2 class="text-center"><span>Contact</span> Us</h2>
                    <input class="form-control" type="text" name="name" placeholder="Name"/>
                    <input class="form-control" type="email" name="email" placeholder="Email"/>
                    <input class="form-control" type="password" name="password"placeholder="Password" />
                    <input class="btn btn-block" type="submit" value="Send" />
                </form> -->
              </div>
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Header-->

          <!--Start Header -->
					<?php
					if (isset($_GET['name']))
					{
						echo "<p align='center'>Hey there ".$_GET['name']."! Welcome!</p>";
					}
					if (isset($_POST['comment']))
					{
						if ($conn->query($sql) === TRUE)
						{
							echo "New record created successfully";
						} else {
							echo "Error: Unable to add comment";
						}
					}
					?>
					</p>
          <div class="contact-form">
            <div class="overlay">
              <div class="container">
                <div class="row centered-vh">
                  <div class="col-md-12">
                    <form action="contact.php" method="post" id="post" class="center-block">
                      <h2 class="text-center"><span>How can we help you?</span></h2>
                        <input class="form-control" type="email" name="email" placeholder="Email"/>
                        <textarea class="form-control" type="message" name="comment" placeholder="message"></textarea>
                        <input class="btn btn-block" type="submit" value="Send" />
                    </form>

										<form action="contact.php" method="post">

											<input class="btn btn-block" type="submit" name="newCookie" value="New Cookie" />
											<input class="btn btn-block" type="submit" name="outputCookie" value="Output Cookie" />

										</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <!--End Header -->
				 <table align="center" id="bord">
				 <?php
				 $sql = "SELECT id, comment FROM comments";
				 $result = $conn->query($sql);

				 if ($result->num_rows > 0) {
				     // output data of each row
				     while($row = $result->fetch_assoc()) {
				         echo "<tr><td style='width:35%;padding:10px'>Comment #".$row["id"]."<br /><hr />".$row["comment"]."<br /></td></tr>";
				     }
				 } else {
				     echo "<tr><td style='width:35%'>No Comments!</td></tr>";
				 }
				 $conn->close();
				 ?>
				 </table>
      <!-- Start history-->
      <div class="info" id="info">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 text-center">
                <p class="email">info@dvergar.com</br>sales@dvergar.com</p>
            </div>
            <div class="col-md-2">
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 text-center">
                <p class="address"><spin class="bold">Invoicing details</spin></br>Address</br>Dvergar Ltd.</br>Vilhonkatu</br>FI-00100 Helsinki</br>Finland</p>
            </div>
            <div class="col-md-2">
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 text-center">
                <p class="taxi"><spin class="bold">How to get here?</spin></br>AutoTaxi – We recommend using automated taxi operating in Helsinki and</br>Espoo region</br>HighspeedTram – The tram lines stopping nearby our office are A, B and D</br>HyperLoop – Closest stop in Meilahti hospital</p>
            </div>
            <div class="col-md-2">
            </div>
          </div>
        </div>
      </div>

      <!-- Start history-->







      <footer>

        <div class="row">
          <div class="col-md-8">
            <p>CONTACT</br>info@dvergar.com</br>sales@dvergar.com</p>
            <p>Dvergar Ltd.</br>Vilhonkatu X</br>FI-00100 Helsinki, Finland</p>
          </div>

          <div class="col-md-4" id="copy-right">
            <p>&copy; DVERGAR CO 2042</p>
          </div>
        </div>

      </footer>
    <!-- /container -->
      <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script> -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> -->
    </body>
</html>
