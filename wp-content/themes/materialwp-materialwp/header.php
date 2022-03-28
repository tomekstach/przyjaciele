<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package materialwp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-39174024-51"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-39174024-51');
</script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&amp;subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">
<!-- <link href="https://cdn.rawgit.com/h-ibaldo/Raleway_Fixed_Numerals/master/css/rawline.css" rel="stylesheet">  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://npmcdn.com/headroom.js"></script>
<?php wp_head(); ?>
<link rel="stylesheet" href="/wp-content/themes/materialwp-materialwp/new_custom.css?v=2.5" type="text/css" media="all">
<link rel="stylesheet" href="/wp-content/themes/materialwp-materialwp/css/rwd.css?v=2" type="text/css" media="all">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'materialwp' ); ?></a>
	<header id="masthead" class="site-header nav-down" role="banner">
		<div id="top-bar">
			<div class="top-bar-icon">
                <a href="https://www.linkedin.com/company/27126747/" class="single-icon-top-bar linked-top" target="_blank"><img src="<?php echo esc_url( site_url( '/' ) ); ?>wp-content/uploads/2017/12/linkedin_menubar.svg"></a>
                <a href="https://www.facebook.com/fundacjaprzyjaciolwwarszawie/" class="single-icon-top-bar face-top" target="_blank"><img src="<?php echo esc_url( site_url( '/' ) ); ?>wp-content/uploads/2017/12/fb_blue.svg"></a>
				<a href="#" class="single-icon-top-bar bip-top"><img src="<?php echo esc_url( site_url( '/' ) ); ?>wp-content/uploads/2017/12/bip_blue.svg"></a>
                <div class="dropdown-lang">
	                <?php wp_nav_menu( array( 
	                	'theme_location' => 'lang-menu',
	                	 'menu_class' => 'dropdown-lang-menu'
	                	 ) 
	                	); 
	                ?>                	
                </div>
                <div class="clear"></div>
                
			</div>
		</div>
		<nav id="menu-page" class="navbar navbar-default navbar-static-top" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
<!-- 		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button> -->
		    <div class="container-logo">
				<a id="logo" class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( site_url( '/' ) ); ?>wp-content/uploads/2017/12/fp_logo_en.svg" style="margin-top: 5px; width:180px; height: auto;"></a>
			</div>
    		</div>

    			<div class="navbar-collapse collapse" id="navbar">
				 <?php
		            wp_nav_menu( array(
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => false,
		                'menu_class'        => 'nav navbar-nav navbar-left',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
                    ?> 
                    <div class="menu-right-elem">               
						<form id="custom-search" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
						    <label>
						        <span class="screen-reader-text">Search for:</span>
						        <img id="lupka" src="<?php echo esc_url( site_url( '/' ) ); ?>wp-content/uploads/2017/11/search-1-1.png">
						        <div class="container-search">		
						        	<input type="search" class="search-field" placeholder="<?php printf(__( 'Search...', 'searchmaterialwp' ))?>" value="" name="s" title="Search for:" />
						        	<div class="close-search"><img src="<?php echo esc_url( site_url( '/' ) ); ?>wp-content/uploads/2017/12/close_icon.svg"></div>
						        </div>
						    </label>
						    <input type="submit" class="search-submit" value="Search" />
						</form>
						<a id="krs_location" href="<?php echo esc_url( site_url( '/' ) ); ?>en/become-a-friend/#tax_one_percent"><img id="menu-krs" src="<?php echo esc_url( site_url( '/' ) ); ?>wp-content/uploads/2017/12/1proc_menu.svg"></a>
						<?php if (pll_current_language()=='pl'){
							echo '<a class="menu-donate-button" title="'.__( 'DONATE', 'materialwp' ).'" href="'.esc_url( site_url( '/' ) ) .'zostan-przyjacielem/#donate_button_hook">'. __( 'DONATE', 'materialwp' ).'<div class="ripple-wrapper"></div></a>';
						} ?>
						<?php if (pll_current_language()=='en'){
							echo '<a class="menu-donate-button-en" title="'.__( 'DONATE', 'materialwp' ).'" href="'.esc_url( site_url( '/' ) ) .'become-a-friend/#donate_button_hook">'. __( 'DONATE', 'materialwp' ).'<div class="ripple-wrapper"></div></a>';
							} ?>
					</div>
        		</div> <!-- .navbar-collapse -->
                
        	</div><!-- /.container -->
		</nav><!-- .navbar .navbar-default -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php
        	
        ?>