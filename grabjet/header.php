<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Grab_JET
 * @since Grab JET
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<div id="page" class="site">
	<div class="site-inner">
		
		<header id="masthead" class="site-header container-fluid" role="banner">
			<div class="site-header-main">
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container"> 
					  <div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><?php grabjet_the_custom_logo(); ?></a>
					  </div>
					  <div id="navbar" class="navbar-collapse collapse">
						<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
						
						
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<ul id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'grabjet' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu nav navbar-nav navbar-right',
									 ) );
								?>
							</ul><!-- .main-navigation -->
						<?php endif; ?>					
						<?php endif; ?>
					  </div><!--/.nav-collapse -->
					</div>
				  </nav>			
			</div><!-- .site-header-main -->		
		</header><!-- .site-header -->
		
		
		<!---  Home Page search --> 
		
		<?php if ( is_front_page() && is_home() ) : ?>
		  <div class="grab-search-form">
				<form method="post" action="">
					<div class="grab-search-form-inner">						
						<div class="form-group" id="pick-up-box">
							<label for="exampleInputPick">pick-up</label>
							<input class="form-control location-box no-border" id="exampleInputPick" type="text" autofocus="true">		
						</div>
						<div class="form-group" id="drop-off-box">
							<label for="exampleInputDrop">drop-off</label>
							<input class="form-control location-box no-border" id="exampleInputDrop" type="text">			
						</div>
						<div class="search-middle-box">
							<div class="form-group row hide-margins">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 styled-select padded-height">
									<select name="price" class="no-border form-control" id="price_box" >
										<option value="">Select</option>
										<option value="flight attendant (+ $300)">Flight attendant (+ $300)</option>
										<option value="full kitchen (+ $100">Full kitchen (+ $100)</option>
										<option value="massage (+ $50)">Massage (+ $50)</option>
										<option value="jacuzzi (+ $180)">Jacuzzi (+ $180)</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padded-height left-border" id="date-box">
									<input type="input" name="date"  value="<?php echo date('d F Y') ?>" class="no-border form-control text-center" id="form_datetime" readonly>
								</div>													
							</div>	
						</div>											
					</div>
					<div class="search-footer row">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<input type="submit" name="submit" value="Request a jet" class="no-border submit-but">
						</div>
					    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 total_amount text-right">$199</div>
					</div>
				</form>
		    </div>
			<div class="clear"></div>
		 
		<?php endif; ?>
		
		<!-- END -->

		<div id="content" class="site-content container">
