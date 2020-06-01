

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rocket Forms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.html">Rocket Forms</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="#home-section" class="nav-link">Documentation</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

	  
	  
    <div class="intro-section single-cover" id="home-section">
      
      <div class="slide-1 " style="background-image: url('images/img_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0">You have successfully registered</h1>
					<p data-aos="fade-up" data-aos-delay="100"><span class="text-white">Form ID</span>&nbsp;5ed29803fa98e80cea071f7c</p>
                </div>

                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
	  <?php
// API URL
$url = 'http://localhost:4000/api/v1/user/register';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = array(
    'mail' => $_POST['mail']
);
$payload = json_encode($data);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

$result = json_decode($result, true);

// Close cURL resource
curl_close($ch);

echo($result['token']);
?>
	  
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">

            <div class="mb-5">
              <h3 class="text-black">Sample Code</h3>
              <p><pre style='color:#000000;background:#ffffff;'><span style='color:#808030; '>&lt;</span>form action<span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>rocketforms.ml/api/v1/mail/&lt;FORM_ID></span><span style='color:#800000; '>"</span>
      		method<span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6;'>POST</span><span style='color:#800000; '>"</span> <span style='color:#808030; '>></span>
  <span style='color:#808030; '>&lt;</span>input type<span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>text</span><span style='color:#800000; '>"</span> name<span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>firstName</span><span style='color:#800000; '>"</span><span style='color:#808030; '>></span>
  <span style='color:#808030; '>&lt;</span>input type<span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>text</span><span style='color:#800000; '>"</span> name<span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>lastName</span><span style='color:#800000; '>"</span><span style='color:#808030; '>></span>
  <span style='color:#808030; '>&lt;</span>input type<span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>email</span><span style='color:#800000; '>"</span> name<span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>mail</span><span style='color:#800000; '>"</span><span style='color:#808030; '>></span>
  <span style='color:#808030; '>&lt;</span>textarea name<span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>comment</span><span style='color:#800000; '>"</span><span style='color:#808030; '>></span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>/</span>textarea<span style='color:#808030; '>></span>
<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>/</span>form<span style='color:#808030; '>></span>
</pre>
<!--Created using ToHtml.com on 2020-06-01 09:18:30 UTC --></p>
			  <h3 class="text-black">Tutorial Video</h3><br>
              <div class="row2 mb-4">
                <div class="col-md-6">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/kc0yKMKXFtQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
              </div>
             
              <p class="mt-4"><a href="#" class="btn btn-primary">Admission</a></p>
            </div>


			</div>
        </div>
      </div>
	  </div>
    <div class="site-section bg-light" id="contact-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7">

						<h2 class="section-title mb-3">Message Us</h2>
            
						<p class="mb-5">Powered by RocketForms</p>
          
						<form method="post" data-aos="fade">
              
							<div class="form-group row">
								<div class="col-md-6 mb-3 mb-lg-0">
                  
									<input type="text" class="form-control" placeholder="First name">
               
								</div>
								<div class="col-md-6">
                 
									<input type="text" class="form-control" placeholder="Last name">
               
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
                 
									<input type="text" class="form-control" placeholder="Subject">
                
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
                  
									<input type="email" class="form-control" placeholder="Email">
               
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									
									<textarea class="form-control" id="" cols="30" rows="10" placeholder="Write your message here."></textarea>
                
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-6">
                  
									<input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Send Message">
                
								</div>
							</div>

						</form>
          
					</div>
				</div>
			</div>
		</div>
     
    <footer class="footer-section bg-white2">
      
			<div class="container">
				<div class="row">
					<div class="col-md-4">
            
						<h3>About Rocket Forms</h3>
            
						<p>Rocket Form is an open-source project by RadianLabs. It will help you to build forms with your HTML, CSS, JavaScript, and allow Form Rocket to handle rest.</p>
          
					</div>
					<div class="col-md-3 ml-auto">
            
						<h3>Links</h3>
            
						<ul class="list-unstyled footer-links">
              
							<li><a href="index.html">Home</a></li>
							<li><a href="#">Documentation</a></li>
							
            
						</ul>
          
					</div>
					<div class="col-md-4">
            
						<h3>Subscribe</h3>
            
						
            
						<form action="#" class="footer-subscribe">
              
							<div class="d-flex mb-5">
               
								<input type="text" class="form-control rounded-0" placeholder="Email">
								<input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              
							</div>
            
						</form>
         
					</div>
				</div>
				<hr color="#737373">			
				<p align=center>			
					
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> Radian Labs All rights reserved.		
							
				</p>
      		
			</div>
		</footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>