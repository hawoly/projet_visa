@extends('layout')

@section('contenu')
   <!--Modal: Login / Register Form-->
   <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog cascading-modal" role="document">
	  <!--Content-->
	  <div class="modal-content">
  
		<!--Modal cascading tabs-->
		<div class="modal-c-tabs">
  
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
			<li class="nav-item">
			  <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
				Login</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
				Register</a>
			</li>
		  </ul>
   
		  <!-- Tab panels -->
		  <div class="tab-content">
			<!--Panel 7-->
			<div class="tab-pane fade in show active" id="panel7" role="tabpanel">
  
			  <!--Body-->
			  <div class="modal-body mb-1">
				<div class="md-form ">
				  <i class="fas fa-envelope prefix"></i>
					<input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
				  
				</div>
  
				<div class="md-form form-sm mb-4">
				  <i class="fas fa-lock prefix"></i>
				  <input type="password" id="modalLRInput11" class="form-control mb-4" placeholder="Password">
				 
				</div>
				<div class="text-center mt-2">
				  <button class="btn btn-info">Se Connecter <i class="fas fa-sign-in-alt"></i></button>
				</div>
			  </div>
			  <!--Footer-->
			  <div class="modal-footer" >
				<div class="options text-center text-md-right mt-1">
				  <p>Not a member? <a href="#panel8"  class="blue-text" role="tabpanel">S'inscrire</a></p>
				  <p>Forgot <a href="#" class="blue-text">Password?</a></p>
				</div>
				<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
			  </div>
  
			</div>
			<!--/.Panel 7-->
	
			<!--Panel 8-->
			<div class="tab-pane fade" id="panel8" role="tabpanel" >
  
			  <!--Body-->
			  <div class="modal-body">
				<div class="md-form form-sm mb-5">
				  <i class="fas fa-envelope prefix"></i>
				  <input type="email" id="modalLRInput12" class="form-control form-control-sm validate" placeholder="E-MAIL">
				  
				</div>
  
				<div class="md-form form-sm mb-5">
				  <i class="fas fa-lock prefix"></i>
				  <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" placeholder="MOT DE PASSE">
				 
				</div>
  
				<div class="md-form form-sm mb-4">
				  <i class="fas fa-lock prefix"></i>
				  <input type="password" id="modalLRInput14" class="form-control form-control-sm validate" placeholder="CONFIRMER MOT DE PASSE">
				 
				</div>
  
				<div class="text-center form-sm mt-2">
				  <button class="btn btn-info">S'inscrire <i class="fas fa-sign-in-alt"></i></button>
				</div>
  
			  </div>
			  <!--Footer-->
			  <div class="modal-footer">
				<div class="options text-right">
				  <p class="pt-1">Already have an account? <a href="#panel7" class="blue-text">Se connecter</a></p>
				</div>
				<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
			  </div>
			</div>
			<!--/.Panel 8-->
		  </div>
  
		</div>
	  </div>
	  <!--/.Content-->
	</div>
  </div>
  <!--Modal: Login / Register Form-->
  
  <div class="text-center">
	<a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm"></a>
  </div>

			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">				
					<div class="row fullscreen d-flex align-items-center justify-content-start  imag">
						<div class="banner-content col-lg-9">
							<h6>Process Visa without within hours</h6>
							<h1 class="text-white">
								Immigrations &  <br>
								Visa Consultation
							</h1>
							
						</div>
						<img class="header-img img-fluid align-self-end d-flex " src="img/header-img.png"  alt="">			
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start callto Area -->
			<section class="calltotop-area pt-70 pb-70">
				<div class="container">
					<div class="callto-section">
						<div class="row justify-content-center align-items-center">
							<div class="col-lg-4 call-left no-padding">
								<p>
									Start <span>planning</span> your <br>
									New <span>Dream</span>
								</p>
							</div>
							<div class="col-lg-5 call-middle">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
								</p>
							</div>
							<div class="col-lg-3 call-right justify-content-end d-flex">
								<a href="#" class="call-btn">Request Free Consultancy</a>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End callto Area -->			

			<!-- Start service Area -->
			
			

			<!-- Start booking Area -->
			<section class="booking-area section-gap relative" id="consultancy">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-5 col-md-6 booking-left">
							<h1 class="text-white">
								Globally Connected <br>	
								by Large Network
							</h1>
							<h4 class="text-white">
								We are here to listen from you deliver exellence
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
							</p>
							<a class="primary-btn" href="#">View Detials</a>
						</div>
						<div class="col-lg-4 col-md-6 booking-right">
								<h4 class="mb-20">Book Free Consultancy!</h4>
								<form action="#">
									<input class="form-control" type="text" name="name" placeholder="Your name" required>
									<input class="form-control" type="email" name="email" placeholder="Email Address" required>
									<input class="form-control" type="text" name="phone" placeholder="Phone Number">
							       	<div class="default-select" id="default-select"">
										<select>
											<option value="" disabled selected hidden>Select Visa</option>
											<option value="1">Pickup One</option>
											<option value="1">Pickup Two</option>
											<option value="1">Pickup Three</option>
											<option value="1">Pickup Four</option>
										</select>
									</div>
									<textarea class="common-textarea form-control mt-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
									<button  class="btn btn-default btn-lg btn-block text-center">Request Free Consultancy</button>
								</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End booking Area -->
			

			<!-- Start review Area -->
		
			

			<!-- Start latest-blog Area -->
			<section class="latest-blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest News from our Blog</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-6 single-blog">
							<img class="img-fluid" src="img/b1.jpg" alt="">
							<ul class="tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life style</a></li>
							</ul>
							<a href="blog-single.html"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">31st January, 2018</p>
						</div>
						<div class="col-lg-6 single-blog">
							<img class="img-fluid" src="img/b2.jpg" alt="">
							<ul class="tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life style</a></li>
							</ul>
							<a href="blog-single.html"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">31st January, 2018</p>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End latest-blog Area -->		

			<!-- Start callto Area -->
			<section class="callto-area section-gap relative">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<h1 class="text-white">No Look Further. Try us today!</h1>
							<p class="text-white pt-20 pb-20">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore <br> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
							<a class="primary-btn" href="#">Apply For Visa</a>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End callto Area -->
@endsection