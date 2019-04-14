
<?php 
session_start();
if(!isset($_SESSION['username']))
{
  header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CHARITY IS GREATEST ACT OF GRACE</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top" style="background-color:gray">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a href="index.php">CHARITY</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
		<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php"><h5 style="color:red">Logout</h5></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <section id="contact">
      <div class="container">
        <div class="row">
          <div class=" mx-auto text-center">
	<h1 style="color:red">Welcome: <?php echo $_SESSION['username'];  ?></h1>
            <h2 class="section-heading">LET'S DONATE YOUR BEST!</h2>
            <hr class="my-4">
          </div>
        </div>
         <center><form method="post" action="home.php" style="margin-top:50px;">
          <input type="text" name="trust" placeholder="Check Trust Here..." style="width:450px;border:0px;" required><input type="submit" name="submit" value="Charity-Place" style="height:5s0px;">             
  </form></center><br>
  <?php 
	error_reporting(0);
	if(isset($_POST['submit']))
	{

	  
	  $trust=$_POST['trust'];
	  //$price=$_POST['price'];

	  include('dbcon.php');
	  include('trust1.php');

	  showdetails($trust);
	}
 ?>



        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
