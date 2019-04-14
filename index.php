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

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">CHARITY</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="admin/login.php">Admin Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="text-center text-white d-flex">
      <div class="container-fluid my-auto">
	<img src="img/b.jpg" style="height: 600px;width:100%;background-position: center;background-repeat: no-repeat; background-size: cover;">

       <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Your Favorite Source Of Free Bootstrap Themes</strong>
            </h1>
            <hr>
          </div>
        </div>
      </div>
    </header>
<center><form method="post" action="index.php" style="margin-top:50px;">
          <input type="text" name="trust" placeholder="Check Trust Here..." style="width:450px;border:0px;"><input type="submit" name="submit" value="Charity-Place" style="height:5s0px;">          
  </form></center><br> <hr>  
  <?php 
	error_reporting(0);
	if(isset($_POST['submit']))
	{

	  
	  $trust=$_POST['trust'];
	  //$price=$_POST['price'];

	  include('dbcon.php');
	  include('trust.php');

	  showdetails($trust);
	}
 ?>
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
             <div class="row">
            <div class="col-md-12">
	<h1 style="color:green"><b>Login Here</b></h1><br>
        <center><form action="login1.php" method="post" enctype="multipart/form-data" style="background: rgba(211,211,211,0.5);">
                <div class="form-group" align="left" style="padding:25px;">

                 <b>USERNAME:</b> <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group" align="left" style="padding:25px;">

                <b>PASSWORD:</b><input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-outline-primary" style="margin-bottom:20px">LOGIN</button>
                <button type="reset" class="btn btn-outline-primary" style="margin-bottom:20px">RESET</button>
                <h4 style="padding:25px;">Not A Member Yet?<a href="register.php">&nbsp;&nbsp;&nbsp;Click Here</a></h4>
              </form></center>
    </div>
  </div>

          </div>
        </div>
      </div>
    </section>



       <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">LET'S DONATE YOUR BEST!</h2>
            <hr class="my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
              <img class="img-fluid" src="img/portfolio/thumbnails/7.jpg" alt="" style="height:240px;">
            <p>
              <a href="#about" style="color:black">SHIRDI SAIBABA TRUST</a>
            </p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
              <img class="img-fluid" src="img/portfolio/thumbnails/8.jpg" alt="" style="height:240px;">
            <p>
              <a href="#about" style="color:black">GANAPATI PULE TRUST</a>
            </p>
          </div>
        </div>
      </div>
 <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <hr class="my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
              <img class="img-fluid" src="img/portfolio/thumbnails/7.jpg" alt="" style="height:240px;">
            <p>
              <a href="#about" style="color:black">TRIMBAKESHWAR TRUST</a>
            </p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
              <img class="img-fluid" src="img/portfolio/thumbnails/8.jpg" alt="" style="height:240px;">
              <p>
             	 <a href="#about" style="color:black">SHANI-SHINGANAPUR TRUST</a>
             </p>
          </div>
        </div>
      </div>
    </section>
<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
           <center> <p class="copyright text-muted">Copyright &copy; AKANKSHA ANTRE</p></center>
          </div>
        </div>
      </div>
    </footer>

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
