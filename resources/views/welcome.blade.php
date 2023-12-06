<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>Health Lab - Responsive HTML5 Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->

    @if (session('status'))
    <div class="alert alert-success">
    {{session('status')}}
    </div>

    @endif
  <ul>
  @foreach ($errors->all() as $error)
    <li class="alert alert-danger"> {{ $error }}</li>
  @endforeach
  </ul>

	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="#"><span>Book Appointment</span></a>
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> demo@gmail.com</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Welcome to Our Health Lab!</p>
					</div>
					<div class="right-top">
						<ul>
							<li><a href="https://www.facebook.com/joyeuse.sarah.9?mibextid=ZbWKwL"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/joyeuse_sarah/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->

	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Accueil</a></li>
                        <li><a class="nav-link" href="#about">APropos</a></li>
                        <li><a class="nav-link" href="#services">Services</a></li>
						<li><a class="nav-link" href="{{route('rendezvous.create')}}">Rendez-vous</a></li>
                        <li><a class="nav-link" href="#gallery">Gallery</a></li>
						<li><a class="nav-link" href="#team">Médecin</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
						<li><a class="nav-link" href="{{route('login')}}">Espace Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->

	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Health Lab</h1>

							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Health Lab</h1>

							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Health Lab</h1>

							</div>
						</div>

					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->

	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>A PROPOS DE NOUS</h2>
							<p> </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Bienvenue au Laboratoire de Santé</h2>

								<p>"Notre clinique s'engage à offrir des soins de santé de qualité supérieure avec compassion et expertise.Forts d'une équipe médicale hautement qualifiée et dévouée, nous sommes déterminés à répondre aux besoins variés de nos patients. </p>
								<p>Notre mission est d'offrir des services médicaux complets, allant de la prévention aux soins curatifs, en utilisant des technologies avancées et des pratiques médicales innovantes. Nous accordons une importance particulière à l'écoute de nos patients et à leur fournir un environnement accueillant et rassurant. Ensemble, nous nous effrons de garantir votre bien-etre et votre santé."</p>
								<a href="#" class="new-btn-d br-2">Read More</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="images/about-img-01.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-02.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-03.jpg" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->

	<!-- Start Services -->
	<div id="services" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Services</h2>
						<p>Nos services de health lab. </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-h-square" aria-hidden="true"></i></div>
								<h3 class="title">Consultations médicales générales</h3>
								<p class="description">
									Examens de routine, diagnostics, et traitements pour diverses affections médicales.

								</p>

							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
								<h3 class="title">Soins spécialisés</h3>
								<p class="description">
                                    Cliniques spécialisées dans des domaines tels que la pédiatrie, la gynécologie, la dermatologie, etc.

								</p>

							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
								<h3 class="title">Services de dépistage</h3>
								<p class="description">
									Examens de santé préventifs, tests de laboratoire, et dépistage de maladies.
.
								</p>

							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
								<h3 class="title">Soins dentaires</h3>
								<p class="description">
									Services de base comme les nettoyages, les extractions, et les traitements de base.
								</p>

							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
								<h3 class="title">Soins d'urgence mineurs</h3>
								<p class="description">
									Traitement pour des blessures légères, infections mineures, ou maladies courantes.
.
								</p>

							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
								<h3 class="title">Services de santé mentale </h3>
								<p class="description">
									Consultations et traitements pour des troubles mentaux tels que l'anxiété, la dépression, etc.
								</p>

							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
								<h3 class="title">Pédiatrie</h3>
								<p class="description">
									spécialité médicale qui se consacre à l'enfant, depuis la vie intra-utérine (en lien avec l'obstétrique ) jusqu'à la fin de l'adolescence.
								</p>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Services -->

	<!-- Start Appointment -->
	<div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Rendez-vous</h2>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Prendre un rendez-vous</h2>
                        </div>
                        <form method="POST" action="{{route('rendezvous.store')}}" class="row g-3">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Nom</label>
                                        <input id="name" name="name" type="text" placeholder="Nom" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Prenom</label>
                                        <input id="text" name="email" type="text" placeholder="prenom" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Age</label>
                                        <input id="number" name="date" type="number" placeholder="age" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Sexe</label>
                                        <input id="text" name="date" type="text" placeholder="sexe" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Telephone</label>
                                        <input id="number" name="date" type="number" placeholder="telephone" class="form-control input-md">
                                    </div>
                                </div>
                                 <!-- Select Basic -->
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Adresse</label>
                                        <input id="text" name="adresse" type="text" placeholder="adresse" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Date du rendez-vous</label>
                                        <input id="date" name="date" type="date" placeholder="date_rendez-vous" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Heure rendez-vous</label>
                                        <input id="heure" name="heure" type="heure" placeholder="heure_rendez-vous" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Docteur</label>
                                        <input id="text" name="text" type="docteur" placeholder="docteur" class="form-control input-md">
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="new-btn-d br-2">Prendre rendez-vous</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
				</div>

	<!-- End Appointment -->

	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Gallery</h2>

					</div>
				</div>
			</div>

			<div class="popup-gallery row clearfix">
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-01.jpg" alt="">
						<div class="box-content">

							<ul class="icon">
								<li><a href="images/gallery-01.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-02.jpg" alt="">
						<div class="box-content">

							<ul class="icon">
								<li><a href="images/gallery-02.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-03.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="images/gallery-03.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-04.jpg" alt="">
						<div class="box-content">

							<ul class="icon">
								<li><a href="images/gallery-04.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-05.jpg" alt="">
						<div class="box-content">

							<ul class="icon">
								<li><a href="images/gallery-05.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-06.jpg" alt="">
						<div class="box-content">

							<ul class="icon">
								<li><a href="images/gallery-06.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-07.jpg" alt="">
						<div class="box-content">

							<ul class="icon">
								<li><a href="images/gallery-07.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-08.jpg" alt="">
						<div class="box-content">

							<ul class="icon">
								<li><a href="images/gallery-08.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

	<!-- Start Team -->
	<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Nos Médecin</h2>

					</div>
				</div>
			</div>

			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-1.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Dentiste</span>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/joyeuse.sarah.9?mibextid=ZbWKwL"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/joyeuse_sarah/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">kristina</h3>
                            <span class="post">Pediatre</span>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/joyeuse.sarah.9?mibextid=ZbWKwL"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/joyeuse_sarah/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-3.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">Gynécologue</span>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/joyeuse.sarah.9?mibextid=ZbWKwL"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/joyeuse_sarah/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</div>

	<!-- End Team -->


    <!-- Start Contact -->
	<section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger"> {{ $error }}</li>
            @endforeach
        </ul>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>healthlab@gmail.com.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+226 67 77 73 70</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="{{route('contactpost')}}" method="POST" role="form" class="php-email-form">
                        @csrf
                        <div class="row gy-2 gx-md-3">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group col-12">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3 col-12">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center col-12 btn"><button type="submit">Send Message</button></div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>
	<!-- End Contact -->


	<!-- Start Login -->

	<!-- End login -->


	<!-- Start Subscribe -->
    <section class="row">
	<div class="section-title col-lg-12">
        <h2>Location</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="col-lg-12">
        <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0" allowfullscreen></iframe>
    </div>
	<!-- End Subscribe -->

	<!-- Start Footer -->
	<footer class="footer-box col-lg-12">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2023 <a href="#">Health Lab</a> Design By : <a href="https://html.design/">health lab</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
</section>
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
