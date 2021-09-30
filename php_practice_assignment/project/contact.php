

<!doctype html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
   	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <title>Contact Us | BusinessPerfect</title>

    <meta name="description" content="BusinessPerfect - Freebie CSS template based on Bootstrap">
    <meta name="author" content="Kashaf Naz">
    <meta name="keywords" content=" css, twitter bootstrap, javascript, jquery, responsive">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/kk.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/kk.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">    

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/colors.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">
		
		

	
        <nav id="primary-navigation" class="site-navigation">

            <div class="container-fluid">

                <div class="navbar-header">
                    
                    <a href="index.php?" class="site-title yellow-text">PROJECT<span class="white-text">Perfect</span></a>

                </div><!-- /.navbar-header -->

                <div class="main-menu" id="perfect-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="index.php?">Home</a></li>
                       
                        <li class="active"><a href="contact.php?">Contact</a></li>
                       
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
                
            </div>
                      
        </nav><!-- /.site-navigation -->
		
    </header><!-- /#masthead -->

    <div class="hero hero-max-720 hero-contact background-overlay">

        <div class="hero-text">
            <h1 class="yellow-text">Contact Us</h1>
        </div><!-- /.hero-text -->

        <div class="hero-arrow">
            <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div><!-- /.hero-arrow -->

    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="section-contact-us">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-5 yellow-bg">

                        <div class="site-section-small">

                            <div class="get-in-touch">

                                <h2 class="section-title">Get in touch</h2>
                                <p class="small-title mb-50">Hey!<br> I'm KASHAF NAZ. Here You Just Need to Note My work on Class Project it's a site, firstly it was a template only html based but I make this template used as thr data Saver of user to contact us and save their data for future used<br>Thank you!</p> 

                                <ul class="list-unstyled mb-0">
									<li>NAME :  <a class="gray-text" href="www.Facebook.kashafnaz.com: Kashaf Naz">Kashaf Naz</a></li>
                                    <li>Samester : 4</li>
									<li>Dpt. : <a class="gray-text" href="CUI.SWL">COPUTER SCIENCES</li>
									<li>Rg# : sp18-BSI-025</li>
                                    <li>Phone: <a class="gray-text" href="tel:+923039711660">+923039711660</a></li>
                                    <li>Fax: <a class="gray-text" href="tel:+923039711660">+923039711660</a></li>
                                    <li><a class="white-text" href="mailto:kashafnaz510@gmail.com">kashafnaz510@gmail.com</a></li>
                                </ul>

                            </div><!-- /.get-in-touch -->

                        </div>

                    </div>
<?php

session_start();

if(!isset($_SESSION['SESS-EMAIL']) && !isset($_SESSION['SESS-NAME'])){
	
	header("Location: login.php");
	
}


 $conn = mysqli_connect( "localhost", "root", "", "last_assignment" );

 if ( isset( $_REQUEST[ 'save' ] ) ) {

 	
 	$name = $_POST[ 'Name' ];
 	$contact = $_POST[ 'Contact' ];
 	$email = $_POST[ 'Email' ];
 	$massage = $_POST[ 'Massage' ];


 	$query = "insert into data( Name, Contact, Email, Massage) VALUES ('".$name."','".$contact."','".$email."','".$massage."')";
 	mysqli_query( $conn, $query );
//	 echo $query;
//	 die();

 	header( "Location: data1.php?addsuccess" );


 




 

 ?>


<script>
	function myFunction() {
		alert( "I am an alert box!" );
	}
</script>


<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

	<title>Document</title>
</head>




<body>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h1>LOGIN FORM</h1>
		<p>THIS WILL TAKE FEW MINUTES</p>
		<a href="logout.php">Logout</a>
	</div>
	<?php 
if(isset($_REQUEST['edit'])){

	$id = $_REQUEST['edit'];
	$query = "select * from data where id = ".$id;
	$var = mysqli_query($conn,$query);
	$obj = mysqli_fetch_array($var);

?>




	<form enctype="multipart/form-data" method="post" name="myform">
		<div style="padding: 50px 100px; background-color:coral; color: white; height: 565px">
			<div class="col-md-offset-3   col-md-6">
				<div class="container-fluid">
					<div class="form-row">
						<div class=" col-md-offset-2 col-md-6">
							<label for="inputPassword4">Name</label>
							<input name="Name" type="text" class="form-control" placeholder="Name" value="<?php echo $obj['Name'] ?>" >


						</div>
						<div class=" col-md-offset-2 col-md-6">
							<label for="inputPassword4">Contact</label>
							<input name="Contact" type="number" class="form-control" placeholder="Contact" value="<?php echo $obj['Contact'] ?>" >


						</div>

						<div class=" col-md-offset-2  col-md-6">
							<label for="inputPassword4">Email</label>
							<input name="Email" type="text" class="form-control" placeholder="Email" value="<?php echo $obj['Email'] ?>" >



						</div>
						<div class=" col-md-offset-2  col-md-6">
							<label for="inputPassword4">Massage</label>
							<input name="Massage" type="text" class="form-control" value="<?php echo $obj['Massage'] ?>" >



						</div>

						<div class=" col-md-offset-2  col-md-6 ">
							<label for="inputPassword4"></label>
							<button name="save"  class="btn btn-success btn-block"  onClick="return func1();"  type="submit">Update</button>
						</div>





					</div>
				</div>
			</div>
		</div>

	</form>
	
            
					
						
        </section><!-- /.section-contact-us -->

        <section id="map" class="section-map"></map></section><!-- /.section-map -->

        <section class="social-networks">

            <div class="container-fluid">

                <div class="row">

                    <a class="white-text black-bg twitter-bg" href="None"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg facebook-bg" href="facebook: m.me/kashafnaz510"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="white-text black-bg google-plus-bg" href="kashafnaz510@gnail.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg message-bg" href="kashafnaz510@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
 
                </div>
                
            </div>
            
        </section><!-- /.social-networks -->

    </main><!-- /.site-main -->

    <footer id="colophon" class="site-footer">

        <div class="container">

            <div class="email">
                <a href="mailto:hello@businessperfect.com">hello@businessperfect.com</a>
            </div><!-- /.email -->

            <div class="row">

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <a href="index.html" class="site-title yellow-text">Business<span>Perfect</span></a>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                    
                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Get in touch</h4>
                        <ul class="list-unstyled">
                            <li>Phone: <a href="tel:+15417543010">+1-541-754-3010</a></li>
                            <li>Email: <a href="mailto:hello@businessperfect.com">hello@businessperfect.com</a></li>
                            <li>Fax: <a href="tel:+15417543010">+1-541-754-3010</a></li>
                        </ul>   
                    </div>
                    
                </div>
              
                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li class="active"><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    
                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Location</h4>
                        <ul class="list-unstyled">
                            <li>BusinessPerfect</li>
                            <li>848 My Street,</li>
                            <li>CA 94544</li>
                        </ul>
                    </div>

                </div>

            </div>
            
        </div>

        <div class="copyright">
            <p>&copy; 2017 BusinessPerfect | Made by <a href="http://milansavov.com/" class="yellow-text">Milan Savov</a></p>
        </div><!-- /.copyright -->
        
    </footer><!-- /.site-footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/touchswipe.min.js"></script>
    <script src="assets/js/skrollr.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>