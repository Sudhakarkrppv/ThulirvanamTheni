<?php   
 session_start();  
 $conn = mysqli_connect('localhost', 'root','','plants');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Bootstrap Portfolio Template developed by Mostafiz Shamim">
    <meta name="author" content="Mostafiz">
    <title>Tree</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}


h2,h4 {
  color: white;
}
.logo{
	position : fixed;
	float: left ;
	padding-left: 0px;
	width: 160px;
	height:auto;
	
}
body {
 
 background-image:url("images/white_leather.png");
 
}



 
.footer-top-box hr{
	border-top: 1px solid rgba(255,255,255,.6);

}

.footer-top-box p{
	 padding-bottom: 15px;
	 color: #cccccc;
 }

 .footer-top-box ul{
     display: inline-block;
}
 .footer-top-box ul a {
     float: left;
     margin-right: 5px;
}
 .footer-top-box ul  a {
     color: #ffffff;
     display: inline-block;
     width: 36px;
     height: 36px;
     border: 2px solid #ffffff;
     text-align: center;
     line-height: 32px;
}
 .footer-top-box ul  a:hover {
     color: #b0b435;
     border-color: #b0b435;
}

.footer-top-box{
	margin-bottom: 30px;
}
.footer-top-box h4{
	color: #ffffff;
	position: relative;
	font-size: 16px;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-weight: 700;
}
.footer-top-box h4::before {
    border-bottom: 3px solid #b0b435;
    content: "";
    height: 3px;
    width: 100%;
    position: absolute;
    bottom: -5px;
    left: 0px;

}

.footer-link-contact h4{
     color: #ffffff;
     font-size: 16px;
     text-transform: uppercase;
     letter-spacing: 2px;
     margin-bottom: 20px;
     position: relative;
     font-weight: 700;
}
 .footer-link-contact h4::before {
     border-bottom: 3px solid #b0b435;
     content: "";
     height: 3px;
     width: 100%;
     position: absolute;
     bottom: -4px;
     left: 0px;
}
 .footer-link-contact ul li{
     margin-bottom: 12px;
}
 .footer-link-contact ul li i{
     position: absolute;
     left: 0;
     top: 5px;
     padding-right: 6px;
}
 .footer-link-contact ul li p{
     padding-left: 25px;
     color: #cccccc;
     position: relative;
}
 .footer-link-contact ul li p{
     font-size: 16px;
     color: #cccccc;
     font-weight: 300;
     padding-right: 16px;
     line-height: 24px;
}
 .footer-link-contact ul li p a{
     color: #cccccc;
}
 .footer-link-contact ul li p a:hover{
     color: #b0b435;
}

.footer-widget, .footer-link, .footer-link-contact{
	margin-top: 15px;
}
 .footer-widget h4 {
     color: #ffffff;
     font-size: 16px;
     text-transform: uppercase;
     letter-spacing: 2px;
     margin-bottom: 20px;
     position: relative;
     font-weight: 700;
}
 .footer-widget h4::before {
     border-bottom: 3px solid #b0b435;
     content: "";
     height: 3px;
     width: 100%;
     position: absolute;
     bottom: -3px;
     left: 0px;
}
 .footer-widget p {
     color: #cccccc;
     font-weight: 400;
     font-size: 14px;
     padding-bottom: 20px;
}


	</style>
	
</head>

<body>
    <!-- ====================================================
	header section -->
    <header class="top-header">
        <div class="container">
            <div class="row header-row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <a href="index.html"><img src="images/logo.png" alt="Thulirvanam" class="logo"></a>
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
                                    <li><a href="index.html" class="">&nbsp;&nbsp;Home</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
									<li><a href="about.php">About us</a></li>
                                    <li class="active"><a href="contact.php">Contact me</a></li>
									
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

   

    <section class="contact text-center" id="sec5">
        <div class="container">
            <div class="row">
                <article class="contact-heading">
				<a href="index.html"><img src="images/.png" alt="" class="logo" align="";></a>
                    <h2>CONTACT ME</h2>
                    <img src="img/daag.png" alt="">
                    <p>Save Tree
                        <br> Save Water.</p>
                </article>
            </div>
        </div>
    </section>
    <!-- end of contact section -->
	
	
	

    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="form">
                    <form action="contact.php" method="POST">
                        <div class="sbtn col-md-12 text-center">
                            <input class="name form-input" type="text" name="name" placeholder="NAME">
                            <input class="email form-input" type="email" name="email" placeholder="EMAIL">
                            <input class="message form-input" type="text" name="message" placeholder="MESSAGE">
                            <input class="submit-btn" type="submit" name="submit" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
					

        </div>
    </section>
	
<?php

if(isset($_POST["submit"]))
{
	
if(isset($_POST["name"]))
        $name=$_POST["name"];		
if(isset($_POST["email"])) 
	$email=$_POST["email"];
if(isset($_POST["message"])) 
	$message=$_POST["message"];	

echo $name;
echo $email;
echo $message;


$sql="INSERT INTO contact (`name`, `email`,`message`) VALUES ( '$name','$email','$message')";
			
		$check=mysqli_query($conn,$sql);
		if($check){
			 echo '<script>alert("Message sent successfully....")</script>';
					
                     echo '<script>window.location=""</script>';  
			}
			else{
				echo "Message not sent";
			}
			
}
	



?>
<section class="contact-form">
	<div class= "container">
	<div class="row">
		<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h4>Social Media</h4>
							<p></p>
							<ul>
                                <a href="https://www.facebook.com/ThulirvanamTheni"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                <a href="tel:9600441118"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            </ul>
						</div>
					</div>
					
					
			<div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address : Sramikkam , 3rd ward , <br> Second Street , Theni , <br> 625515. </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:9600441118">9600441118</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:thulir@gmail.com">thulir@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
            </div>
			
			<div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Thulirvanam</h4>
                            <p>ThulirvanamTheni  · Non-governmental organisation (NGO).</p> 
							<p>இயற்கை மீட்பு பணிகளில் கரம் கொடுங்கள். </p> 							
                        </div>
                    </div>
		</div>			
		
</div>

</section>


    <!-- footer starts here -->
    <footer class="footer text-center">
        <p>Designed by : <a href="">Sudhakar_Kr</a> | All rights reserved</p>
		
		    </footer>

    <!-- script tags
	============================================================= -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
