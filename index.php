<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php include('languages/es.php'); ?>
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Mario HD" />
	<link rel="icon" href="images/favicon.png">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title><?php echo $lang['main']['company']; ?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

		<section id="slider" class="slider-element slider-parallax full-screen with-header swiper_wrapper clearfix">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('images/oil/port-arthur.jpg');">
							<div class="container clearfix rgba-cover">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp"><?php echo $lang['main']['company']; ?></h2>
									<p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200"><?php echo $lang['main']['description']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section>

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/tasc-logo.png" alt="<?php echo $lang['main']['company']; ?>"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/tasc-logo.png" alt="<?php echo $lang['main']['company']; ?>"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
							<li><a href="#" data-href="#section-about"><div><?php echo $lang['menu']['about']; ?></div></a></li>
							<li><a href="#" data-href="#section-work"><div><?php echo $lang['menu']['work']; ?></div></a></li>
							<li><a href="#" data-href="#section-team"><div><?php echo $lang['menu']['team']; ?></div></a></li>
							<li><a href="#" data-href="#section-services"><div><?php echo $lang['menu']['services']; ?></div></a></li>
							<li><a href="#" data-href="#section-contact"><div><?php echo $lang['menu']['contact']; ?></div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<div class="clear"></div>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<section id="section-about" class="page-section">

					<div class="container clearfix">

						<div class="heading-block center">
							<h2><?php echo $lang['menu']['about']; ?></h2>
							<span><?php echo $lang['about']['sub-title']; ?></span>
						</div>

						<?php foreach ($lang['about']['cards'] as $key => $card): ?>

						<div class="col_one_third nobottommargin <?php echo ($key == 2) ? 'col_last' : '' ?>">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/oil/<?php echo $card['image'] ?>" alt="<?php echo $cards['title']; ?>">
								</div>
								<div class="fbox-desc">
									<h3><?php echo $card['title']; ?></h3>
									<p><?php echo $card['content']; ?></p>
								</div>
							</div>
						</div>

						<?php endforeach ?>

						<div class="clear"></div>

					</div>

					<div class="section dark parallax nobottommargin" style="padding: 80px 0;background-image: url('images/oil/plataforma_lejos.jpg');" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -300px;">

						<div class="container clearfix">

							<div class="col_full nobottommargin center" data-animate="bounceIn">
								<!--<i class="i-plain i-xlarge divcenter nobottommargin icon-code"></i>-->
								<div class="counter counter-lined"><span data-from="0" data-to="100" data-refresh-interval="5" data-speed="2000"></span>+</div>
								<h5>Años de experiencia combinada</h5>
							</div>


						</div>

					</div>

				</section>

				<section id="section-work" class="page-section topmargin-lg">

					<div class="heading-block center bottommargin-lg">
						<h2><?php echo $lang['opportunities']['title']; ?></h2>
						<span><?php echo $lang['opportunities']['subtitle-1']; ?></span>
					</div>

					<div class="container clearfix">	
						<?php foreach ($lang['opportunities']['cards1'] as $key => $card): ?>
							<div class="col_one_fourth <?php echo ($key == 3) ? 'col_last' : '' ?>">
								<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn">
									<div class="fbox-icon">
										<img src="images/icons/<?php echo $card['icon'] ?>" alt="<?php echo $card['title'] ?>">
									</div>
									<h3><?php echo $card['title'] ?></h3>
									<p><?php echo $card['content'] ?></p>
								</div>
							</div>
						<?php endforeach ?>
					</div>					
					
					<div class="heading-block center bottommargin-lg">
						<h2></h2>
						<span><?php echo $lang['opportunities']['subtitle-2']; ?></span>
					</div>

					<div class="container clearfix">
						<?php foreach ($lang['opportunities']['cards2'] as $key => $card): ?>
							<div class="col_one_fourth <?php echo ($key == 3) ? 'col_last' : '' ?>">
								<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn">
									<div class="fbox-icon">
										<img src="images/icons/<?php echo $card['icon'] ?>" alt="<?php echo $card['title'] ?>">
									</div>
									<h3><?php echo $card['title'] ?></h3>
									<p><?php echo $card['content'] ?></p>
								</div>
							</div>
						<?php endforeach ?>
					</div>

					<!--<div class="divider divider-short divider-center topmargin-lg"><i class="icon-star3"></i></div>-->
	
				</section>

				<section id="section-team" class="page-section topmargin-lg">

					<div class="heading-block center">
						<h2><?php echo $lang['team']['title']; ?></h2>
						<span><?php echo $lang['team']['subtitle']; ?></span>
					</div>

					<div class="container clearfix">
						
						<div class="row team-container">
							<?php foreach ($lang['team']['cards'] as $key => $card): ?>
							<div class="col-xl-12  bottommargin">
								<div class="team team-list clearfix">
									<div class="team-image">
										<img src="images/team/<?php echo $card['picture']; ?>" alt="<?php echo $card['name']; ?>">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4><?php echo $card['name']; ?></h4></div>
										<ul class="team-content">
											<?php foreach ($card['content'] as $copy) :?>
												<li>
													<?php echo $copy; ?>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</div>
							<?php endforeach ?>
						</div>

						<div class="clear"></div>
					</div>

					<div class="section parallax" style="background-image: url('images/parallax/3.jpg'); padding: 100px 0;" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -100px;">
						<div class="heading-block center nobottomborder nobottommargin">
							<h2><?php echo $lang['parallax']['copy']; ?></h2>
						</div>
					</div>

				</section>

				<section id="section-services" class="page-section topmargin-lg">

					<div class="heading-block center">
						<h2><?php echo $lang['services']['title']; ?></h2>
						<span><?php echo $lang['services']['subtitle']; ?></span>
					</div>

					<div class="container clearfix centered">
						<?php foreach ($lang['services']['sections'] as $key => $section): ?>
							<div class="col_half nobottommargin <?php echo ($key == 1) ? 'col_last' : '' ?>">
								<h3><?php echo $section['title'] ?></h3>
								<ul>
									<?php foreach ($section['content'] as $bullet): ?>
										<li><?php echo $bullet ?></li>
									<?php endforeach ?>
								</ul>
							</div>
						<?php endforeach ?>

						<div class="clear"></div>
					</div>

					<div class="divider divider-short divider-center topmargin-lg"><i class="icon-star3"></i></div>

				</section>

				<section id="section-contact" class="page-section">

					<div class="heading-block title-center">
						<h2><?php echo $lang['contact']['title']; ?></h2>
					</div>

					<div class="container clearfix">

						<!-- Contact Form
						============================================= -->
						<div class="col_half">

							<div class="fancy-title title-dotted-border">
								<h3><?php echo $lang['contact']['subtitle']; ?></h3>
							</div>

							<div class="contact-widget">

								<div class="contact-form-result"></div>

								<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name"><?php echo $lang['contact']['fields']['name']; ?> <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email"><?php echo $lang['contact']['fields']['email']; ?> <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone"><?php echo $lang['contact']['fields']['phone']; ?></label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-subject"><?php echo $lang['contact']['fields']['subject']; ?> <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message"><?php echo $lang['contact']['fields']['message']; ?> <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit"><?php echo $lang['contact']['fields']['button']; ?></button>
								</div>

							</form>

						</div>


						</div><!-- Contact Form End -->

						<!-- Google Map
						============================================= -->
						<div class="col_half col_last">

							<section id="google-map" class="gmap" style="height: 410px;"></section>


						</div><!-- Google Map End -->
					</div>
				</section>
			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						2018 Copyrights &copy; Tasc Energía<br>
						<div class="copyright-links"><a href="#">Aviso de Privacidad</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@tasc-energia.com <!--<span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369-->
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script src="https://maps.google.com/maps/api/js?key=AIzaSyBFTcDdHnU3dncnsyV4UNAv-RMeqrCN8v4"></script>
	<script src="js/jquery.gmap.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script>
		$('.carousel').carousel()

		jQuery('#google-map').gMap({

			address: 'Bosque de los Ciruelos 140, Bosque de las Lomas, Ciudad de México, CDMX',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					address: "Bosque de los Ciruelos, Bosque de las Lomas, Ciudad de México, CDMX",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;"><span>Tasc Energía</span></h4><p class="nobottommargin">Bosque de los Ciruelos 140-503, Bosque de las Lomas, Ciudad de México, CDMX</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}

		});
	</script>

</body>
</html>