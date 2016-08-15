<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Due In</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,700,600,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <script src="https://use.typekit.net/uov7tdf.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>

        <link rel="stylesheet" href="{{URL::to('landing/css/slicknav.css')}}">
        <link rel="stylesheet" href="{{URL::to('landing/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{URL::to('landing/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{URL::to('landing/css/owl.transitions.css')}}">
        <link rel="stylesheet" href="{{URL::to('landing/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{URL::to('landing/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::to('landing/css/main.css')}}">
        <link rel="stylesheet" href="{{URL::to('landing/css/responsive.css')}}">
        <script src="{{URL::to('landing/js/vendor/modernizr-2.6.2.min.js')}}"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
         
         <!-- header Start
         ================================================= -->
        
        <section id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block-left">
							<nav class="navbar navbar-default" role="navigation">
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <div class="nav-logo">
									<a href="#"><img src="{{URL::to('landing/img/duein.png')}}" alt="logo"></a>
								  </div>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav">
									<li class="active">
                                      @if(Auth::check())
                                          <li><a class="ifSmall" href="{{URL::route('nav.new')}}">New Task</a></li>
                                          <li><a class="ifSmall" href="{{URL::route('user.profile')}}">Profile</a></li>
                                          <li><a class="ifSmall" href="{{URL::route('user.logout')}}">Logout</a></li>
                                      @else
                                          <li><a class="ifSmall" href="{{URL::route('nav.signin')}}">Login</a></li>
                                          <li><a class="ifSmall" href="{{URL::route('nav.signup')}}">Sign Up</a></li>
                                      @endif
								  </ul>
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
                        </div>
                    </div><!-- .col-md-6 -->

                    <div class="col-md-6">
                        <div class="block-right">
                            <div class="contact-area">
                                <ul>
                                    @if(Auth::check())
                                        <li><a href="{{URL::route('nav.new')}}">New Task</a></li>
                                        <li><a href="{{URL::route('user.profile')}}">Profile</a></li>
                                        <li><a href="{{URL::route('user.logout')}}">Logout</a></li>
                                    @else
                                        <li><a href="{{URL::route('nav.signin')}}">Login</a></li>
                                        <li><a href="{{URL::route('nav.signup')}}">Sign Up</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col-md-6 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #heder close -->

        <!-- Slider Start
        ============================================================== -->

        <section id="slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="slider-text-area">
                                <div class="slider-text">
                                    <h2>The future of setting tasks and<br>reminders is here.</h2>
                                    <p class="slider-p">Create tasks, scan tasks<br> to instantly copy down, get <br> proactive reminders and its FREE!</p>
                                    <button type="button" class="btn btn-default edit-button-1">FIND OUT MORE</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-12 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #slider close -->

        <!-- Service Start 
        ============================================================= -->

        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-top">
                            <div class="service-header">
                                <h1>How it works.</h1>
                                <p>Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. <br /> Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.</p>
                            </div>
                        </div>
                    </div><!-- .col-md-12 close -->
                </div><!-- row close -->
				<div class="row">
					<div class="col-md-12">
						<div class="block-bottom">
							<div class="service-tab">
								  <!-- Nav tabs -->
								  <ul class="badhon-tab" role="tablist">
									<li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
									<i class="fa fa-television"></i>
									Open
									</a></li>
									<li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
									<i class="fa fa-pencil-square-o"></i>
									Create
									</a></li>
									<li><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
									<i class="fa fa-camera"></i>
                                            Scan
									</a></li>
									<li><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
									<i class="fa fa-paper-plane-o"></i>
									Save
									</a></li>
									<li><a href="#umbrella" aria-controls="settings" role="tab" data-toggle="tab">
									<i class="fa fa-check"></i>
									Done
									</a></li>
								  </ul>

								  <!-- Tab panes -->
								  <div class="tab-content edit-tab-content">
									<div class="tab-pane active edit-tab" id="home">
										<div class="teb-icon-edit">
											<i class="fa fa-television"></i>
										</div>
										<h1>Heading Feature title goes here</h1>
										<p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac <br /> neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id <br /> orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt <br /> ligula, ac luctus mi interdum a.</p>
									</div>
									<div class="tab-pane edit-tab" id="profile">
										<h1>Heading Feature title goes here</h1>
										<p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac <br /> neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id <br /> orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt <br /> ligula, ac luctus mi interdum a.</p>
									</div>
									<div class="tab-pane edit-tab" id="messages">
										<div class="teb-icon-edit">
											<i class="fa fa-camera"></i>
										</div>
										<h1>Heading Feature title goes here</h1>
										<p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac <br /> neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id <br /> orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt <br /> ligula, ac luctus mi interdum a.</p>
									</div>
									<div class="tab-pane edit-tab" id="settings">
										<div class="teb-icon-edit">
											<i class="fa fa-paper-plane-o"></i>
										</div>
										<h1>Heading Feature title goes here</h1>
										<p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac <br /> neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id <br /> orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt <br /> ligula, ac luctus mi interdum a.</p>
									</div>
									<div class="tab-pane edit-tab" id="umbrella">
										<div class="teb-icon-edit">
											<i class="fa fa-check"></i>
										</div>
										<h1>Heading Feature title goes here</h1>
										<p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac <br /> neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id <br /> orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt <br /> ligula, ac luctus mi interdum a.</p>
									</div>
								  </div>
							</div>
						</div>
					</div><!-- .col-md-12 close -->
				</div><!-- row close -->
            </div><!-- .container close -->
        </section><!-- #service close -->


        <!-- contant-1 start
        ===================================================== -->

        <section id="contant-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block-left">
                            <div class="contant-1-text-area">
                                <div class="contant-1-head">
                                    <h1>Effortlessly streamline your <br> tasks.</h1>
                                </div>
                                <div class="contant-1-text">
                                    <h2>Duis bibendum diam non <br> erat facilisis tincidunt.</h2>
                                    <p>Duis bibendum diam non erat facilaisis tincidunt. Fusce leo <br /> neque, lacinia at tempor vitae, porta at arcu. Vestibulum <br /> varius non dui at pulvinar. Ut egestas orci in quam <br /> sollicitudin aliquet. </p>
                                    <button type="button" class="btn btn-default edit-button-2">LEARN MORE</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-6 close -->
                    <div class="col-md-6">
                        <div class="block-right">
                            <div class="block-right-img">
                                <img src="{{URL::to('landing/img/main.png')}}" alt="img">
                            </div>
                        </div>
                    </div><!-- .col-md-6 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #contant-1 close -->


        <!-- Gallery Start
        ============================================================= -->

        <section id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-top">
                            <div class="gallery-area">
                                <h1>Our Latest screenshots gallery</h1>
                                <p>Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. <br /> Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.</p>
                            </div>
                        </div>
                    </div><!-- .col-md-12 -->
                </div><!-- .row close -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-bottom">
                            <div class="gallery-list" id="owl-demo">
                                <div class="gallery-items item">
                                    <div class="gallery-img">
                                        <img src="{{URL::to('landing/img/mobile-phon-2.png')}}" alt="img">
                                    </div>
                                    <div class="gallery-items-text">
                                        <p>Duis bibendum diam non erat facilaisis <br>
                                        tincidunt. Fusce leo neque, lacinia at <br>
                                        tempor vitae, porta at arcu.</p>
                                    </div>
                                </div>
                                <div class="gallery-items item">
                                    <div class="gallery-img">
                                        <img src="{{URL::to('landing/img/mobile-phon-2.png')}}" alt="img">
                                    </div>
                                    <div class="gallery-items-text">
                                        <p>Duis bibendum diam non erat facilaisis <br>
                                        tincidunt. Fusce leo neque, lacinia at <br>
                                        tempor vitae, porta at arcu.</p>
                                    </div>
                                </div>
                                <div class="gallery-items item">
                                    <div class="gallery-img">
                                        <img src="{{URL::to('landing/img/mobile-phon-2.png')}}" alt="img">
                                    </div>
                                    <div class="gallery-items-text">
                                        <p>Duis bibendum diam non erat facilaisis <br>
                                        tincidunt. Fusce leo neque, lacinia at <br>
                                        tempor vitae, porta at arcu.</p>
                                    </div>
                                </div>
                                <div class="gallery-items item">
                                    <div class="gallery-img">
                                        <img src="{{URL::to('landing/img/mobile-phon-2.png')}}" alt="img">
                                    </div>
                                    <div class="gallery-items-text">
                                        <p>Duis bibendum diam non erat facilaisis <br>
                                        tincidunt. Fusce leo neque, lacinia at <br>
                                        tempor vitae, porta at arcu.</p>
                                    </div>
                                </div>
                                <div class="gallery-items item">
                                    <div class="gallery-img">
                                        <img src="{{URL::to('landing/img/mobile-phon-2.png')}}" alt="img">
                                    </div>
                                    <div class="gallery-items-text">
                                        <p>Duis bibendum diam non erat facilaisis <br>
                                        tincidunt. Fusce leo neque, lacinia at <br>
                                        tempor vitae, porta at arcu.</p>
                                    </div>
                                </div>
                                <div class="gallery-items item">
                                    <div class="gallery-img">
                                        <img src="{{URL::to('landing/img/mobile-phon-2.png')}}" alt="img">
                                    </div>
                                    <div class="gallery-items-text">
                                        <p>Duis bibendum diam non erat facilaisis <br>
                                        tincidunt. Fusce leo neque, lacinia at <br>
                                        tempor vitae, porta at arcu.</p>
                                    </div>
                                </div>
                                <div class="gallery-items item">
                                    <div class="gallery-img">
                                        <img src="{{URL::to('landing/img/mobile-phon-2.png')}}" alt="img">
                                    </div>
                                    <div class="gallery-items-text">
                                        <p>Duis bibendum diam non erat facilaisis <br>
                                        tincidunt. Fusce leo neque, lacinia at <br>
                                        tempor vitae, porta at arcu.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-12 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #gallery close -->


        <!-- Contant-2 Start
        =============================================================== -->

        <section id="contant-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block-left">
                            <div class="contant-2-img">
                                <img src="{{URL::to('landing/img/mobile-phon-3.png')}}" alt="img">
                            </div>
                        </div>
                    </div><!-- .col-md-6 close -->

                    <div class="col-md-6">
                        <div class="block-right">
                            <div class="contant-2-text-area">
                                <div class="contant-2-header">
                                    <h1>Onec ultrices ultricies tellus<br> perfect screens here</h2>
                                </div>
                                <div class="contant-2-text">
                                   <h2>Duis bibendum diam non <br> erat facilisis tincidunt.</h3>
                                   <p>Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet. </p>
                                   <button type="button" class="btn btn-default edit-button-3">LEARN MORE</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-6 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #contant-2 close -->

        <!-- testimonial Start
        ============================================================= -->

        <section id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="testimonial-area">
                                <div class="tm-header">
                                    <h2>What people say about us</h2>
                                </div>
                                <div class="tm-contant">
									<div class="tm-contant-items" id="slide-testimonial">
										<div class="tm-contant-list item">
											<div class="tm-img">
												<img src="{{URL::to('landing/img/pepole-img.png')}}" alt="img">
											</div>
											<div class="tm-text">
												<p>" It’s official – I love this app, I couldn’t be without it now." <span>- Ron Burgundy</span></p>
											</div>
										</div>
										<div class="tm-contant-list item">
											<div class="tm-img">
												<img src="{{URL::to('landing/img/pepole-img.png')}}" alt="img">
											</div>
											<div class="tm-text">
												<p>" It’s official – I love this app, I couldn’t be without it now." <span>- Ron Burgundy</span></p>
											</div>
										</div>
										<div class="tm-contant-list item">
											<div class="tm-img">
												<img src="{{URL::to('landing/img/pepole-img.png')}}" alt="img">
											</div>
											<div class="tm-text">
												<p>" It’s official – I love this app, I couldn’t be without it now." <span>- Ron Burgundy</span></p>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-12 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #testimonial close -->


        <!-- Submit Start
        ======================================================== -->

        <section id="submit-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="submit-contant">
                                <div class="submit-header">
									<i class="fa fa-envelope-o"></i>
                                    <h3>Subscribe our Newsletter</h3>                                   
                                </div>
								<div class="submit-area">
									<div class="submit-bottom">
										<form action="">
											<input type="text" placeholder="your email address">
											<input type="submit" value="submit">
										</form>
									</div>
								</div>
                            </div>
                        </div>
                    </div><!-- .col-md-12 -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #submit close -->


        <!-- footer Start
        ====================================================================== -->

        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="footer-contant">
                                <h3>Say Hi, Get In Touch</h3>
                                <div class="social-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-snapchat-ghost"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                                <div class="support-link">
                                    <ul>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Press</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Developers</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- #footer -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{URL::to('landing/js/vendor/jquery-1.10.2.min.js')}}"><\/script>')</script>
        <script src="{{URL::to('landing/js/owl.carousel.min.js')}}"></script>
        <script src="{{URL::to('landing/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::to('landing/js/plugins.js')}}"></script>
        <script src="{{URL::to('landing/js/main.js')}}"></script>
    </body>
</html>
