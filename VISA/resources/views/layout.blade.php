<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Immigration</title>
		<!-- Font Awesome -->
     
			<!--
			CSS
			============================================= -->
	 
	   <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
	
			


		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row header-top align-items-center">
			    		<div class="col-lg-4 col-sm-4 menu-top-left">
			    			<span>
			    				visa <br>
								
			    			</span>
			    		</div>
			    		<div class="col-lg-4 menu-top-middle justify-content-center d-flex">
							<a href="index.html">
								<img class="img-fluid" src="" alt="">	
							</a>			    			
			    		</div>
			    		<div class="col-lg-4 col-sm-4 menu-top-right">
			    			<a class="tel" href="+221 77 626 08 85">+221 77 626 08 85</a>
			    			<a href="tel:+880 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
			    		</div>
			    	</div>
			    </div>	
			    	<hr>
			    <div class="container">	
			    	<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container  " >
				        <ul class="nav-menu">
							
				          <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
				         
				          <li><a href="{{ url('/country') }}">Country</a></li>
						  <li><a href="{{ url('/contact') }}">Contact</a></li>
						  <li class=" text-right "><a href="" class="" data-toggle="modal" data-target="#modalLRForm">Connexion</a>
							
						  
				      
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
			  					
        <div>
		@yield("contenu")
		</div>
		
		
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
					<div class="container">
						
						<div class="footer-bottom row">
							<p class="footer-text m-0 col-lg-6 col-md-12">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
							<div class="footer-social col-lg-6 col-md-12">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>
					</div>
				</footer>	
		
			<script src="{{asset('js/app.js')}}"></script>
          
			
		</body>
	</html>




