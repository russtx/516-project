<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<div class="row">
	      <div class="col-sm-12 volunteer">
	        <a href=<?php echo get_template_directory_uri(); ?>/volunteer/>VOLUNTEER NOW!</a>
	      </div>

	      <div class="col-sm-12 newsletter">
	        <p>Join our newsletter today for free</p>
	        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('newsletter')) ?>
	      </div>

	      <div class="col-sm-12 donate">
	        <a href=<?php echo get_template_directory_uri(); ?>/donations/>DONATE TODAY!</a>
	      </div>
			</div><!-- row -->

			<div class="row">
				<!-- header -->
				<header class="header clear" role="banner">

					<div class="col-sm-12 socialIcons">
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<i class="fa fa-facebook-official" aria-hidden="true"></i>
						<i class="fa fa-instagram" aria-hidden="true"></i>
						<i class="fa fa-youtube-play" aria-hidden="true"></i>
					</div>


						<!-- logo -->
						<div class="col-sm-6 logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_2.png" alt="Logo" class="logo-img">
							</a>
						</div>
						<!-- /logo -->

						<!-- nav -->
								     <nav class="col-sm-6 nav" role="navigation">
								        <input class="menu-btn" type="checkbox" id="menu-btn" />
								        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
								         <?php html5blank_nav(); ?>
								  	 </nav><!-- /nav -->

				</header>
				<!-- /header -->
			</div><!-- row -->
