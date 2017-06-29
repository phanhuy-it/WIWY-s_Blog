<?php /*?><!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

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

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
<?php */?>




<!DOCTYPE HTML>
<html <?php language_attributes(); ?> >
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?php bloginfo('keyword'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<?php wp_head(); ?>

	<script type="application/x-javascript"> 
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar(){
			window.scrollTo(0,1);
		}
	</script>
	
	
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel='stylesheet' type='text/css' />
	<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Frijole" rel="stylesheet">
	<!--//webfonts-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!--end slider -->
	<!--script-->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/move-top.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/easing.js"></script>
	<!--/script-->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
			});
		});
	</script>
	<!---->

</head>
<body <?php body_class(); ?> >
<!---header-->			
<div class="header">  
	 <div class="container">
		 <div class="logo col-md-6 col-lg-6 col-sm-12 col-xs-12">
			  <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?><br class="br_style01"><span>when I was young ...</span></a>
		 </div>
		 <!---start-top-nav-->
		 <div class="top-menu col-md-6 col-lg-6 col-sm-12 col-xs-12">
			 <ul>
				<?php wp_nav_menu(); ?>
			 </ul>
		 </div>
		 <div class="clearfix"></div>
		<!---//End-top-nav-->					
	 </div>
</div>