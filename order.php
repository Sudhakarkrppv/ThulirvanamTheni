
<?php   
 session_start(); 
 $conn = mysqli_connect("localhost", "root", "", "plants");   
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Bootstrap Portfolio Template developed by Mostafiz Shamim">
    <meta name="author" content="Mostafiz">
    <title>Folio – Responsive Bootstrap Portfolio Template</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>


<style>
body {font-family: Arial, Helvetica, sans-serif;}

.image-container {
  background-image: url("img/bg/2.jpg");
  background-size: cover;
  position: relative;
  height: 300px;
}

.text {
  background-color: white;
  color: black;
  font-size: 6vw; 
  font-weight: bold;
  margin: 0 auto;
  padding: 10px;
  width: 50%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  mix-blend-mode: screen;
}
</style>

<body>
    <!-- ====================================================
	header section -->
    <header class="top-header">
        <div class="container">
            <div class="row header-row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <a href="index.html"><img src="" alt="" class="logo"></a>
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.html">Home</a></li>
                                    
                                    
									<li class="active"><a href="order.php">Gallery</a></li>
                                    
									<li><a href="about.php">About us</a></li>
                                    <li><a href="contact.php">Contact me</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

 <section class="portfolio text-center" id="sec4">
        <div class="row portfolio-row">
		
            <div class="portfolio-heading">
                <h2>MY PLANTS</h2>
                <img src="img/daag.png" alt="">
                <p>Save Tree
                    <br>
                    <br> Be cool...</p>
            </div>

<div class="image-container">
  <div class="text">துளிர்வனம்</div>
</div>
<hr class="soften"/>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="img/r1.jpg" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Pink White Rose Flower Plant Romantic Beautiful Rose Plant</h4>
                        <p>Rose Live Plants.</p>
						<p>We send Plant without Flower </p>
						<p>Price : Rs.320.00 FREE Delivery.</p>
                    </figcaption>
                </figure>
                <a href="img/rr1.jpg"><i class="fa fa-search"></i></a>
            </div>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="img/f6.jpg" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Jatropha</h4>
                        <p>Jatropha curcas is a species of flowering plant in the spurge family, Euphorbiaceae, that is native to the American tropics, most likely Mexico and Central America.</p>
						<p>Price : Rs.75.00 FREE Delivery.</p>
                    </figcaption>
                </figure>
                <a href="img/f6-6.jpg"><i class="fa fa-search"></i></a>
            </div>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="img/r3.jpg" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Purple Chinese Rose </h4>
                        <p>Rose Live Plants.</p>
						<p>We send Plant without Flower </p>
						<p>Price : Rs.320.00 FREE Delivery.</p>
                    </figcaption>
                </figure>
                <a href="img/r3.jpg"><i class="fa fa-search"></i></a>
            </div>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="img/9.jpg" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Calla Lily</h4>
                        <p>Keeping this rhizome happy indoors is a matter of paying attention to some very basic growing conditions.</p>
						<p>Price : Rs.200.00 FREE Delivery.</p>

                    </figcaption>
                </figure>
                <a href="img/9.jpg"><i class="fa fa-search"></i></a>
            </div>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="img/f9.jpg" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Kalanchoe</h4>
                        <p>Kalanchoe plants are thick leaved succulents that are often seen in florist shops or garden centers. Most end up as potted plants but areas that can mimic their native land of Madagascar can grow them outdoors.</p>
						<p>Price : Rs.200.00 FREE Delivery.</p>
                    </figcaption>
                </figure>
                <a href="img/f9.jpg"><i class="fa fa-search"></i></a>
            </div>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="img/f1.jpg" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Peace Lily</h4>
                        <p>Of all the flowering house plants, Peace Lily care is probably the easiest. In fact, it tolerates average indoor conditions better than many house plants.</p>
						<p>Price : Rs.550.00 FREE Delivery.</p>
                    </figcaption>
                </figure>
                <a href="img/f1.jpg"><i class="fa fa-search"></i></a>
            </div>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="img/f8.jpg" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Jasmine</h4>
                        <p>Jasmine - is known for its intensely fragrant blossoms that flower all year to brighten your home. The starry flowers grow in lovely clusters of bright white . </p>
						<p>Price : Rs.75.00 FREE Delivery.</p>
                    </figcaption>
                </figure>
                <a href="img/f8.jpg"><i class="fa fa-search"></i></a>
            </div>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="img/f10.jpg" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Poinsettia</h4>
                        <p>These finicky short-day plants require specific growing needs in order to retain their Christmas blooms. However, with proper care, your holiday poinsettia should continue to put out blooms, or in the least remain attractive for weeks after. </p>
						<p>Price : Rs.550.00 FREE Delivery.</p>
                    </figcaption>
                </figure>
                <a href="img/f1010.jpg"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </section>
    <!-- end of portfolio section -->

   
    <!-- footer starts here -->
    <footer class="footer text-center">
        <p>Copyright: &copy; <a href="">Sudhakar</a> | All rights reserved</p>
    </footer>

    <!-- script tags
	============================================================= -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
