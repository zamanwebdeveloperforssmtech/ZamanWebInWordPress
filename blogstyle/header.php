<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Blogstyle Wraper -->

<div class="bls-wrap">

<header>

<!-- Blogstyle Logo Menu Bar -->

<div class="bls-logo-menu-bar">

<div class="container">

<div class="col-md-3 col-sm-6 col-xs-12">

<div class="bls-logo">
    
<?php if ( function_exists('the_custom_logo') && has_custom_logo() ) : ?>
			<?php the_custom_logo(); ?>
		<?php else : ?>
		    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			
			<?php endif; ?>

</div>

</div>


<?php if( get_theme_mod( 'blogstyle_search_box' ) == '1') { ?> 

<div class="col-md-9 col-sm-6 col-xs-12">

    <div class="codecon_half">

    <div class="expSearchBox">

    	<?php get_search_form(); ?>
		
    </div>

    </div>

</div>

<?php } ?>

</div>

</div>

<div class="bls-menu-wrap">
	<div class="container">
		<div class="col-md-12 text-center">
			<div class="bls-menu">

				<div class="custom-nav nav-menu-align">

				<nav class="navbar navbar-default">

				<?php

				wp_nav_menu(
				  array(
					'theme_location' => 'header-menu',
					'container' => '',
					'container_class' => '',
					'li_class'   => 'dropdown-submenu-position',
					'container_id' => '',
					'menu_class' => 'main-menu nav nav-bar',
					'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
					'walker' => new WP_Bootstrap_Navwalker()
				  )
				  );

				        ?>
				 
				</nav>

				</div>

				</div>
			<div class="col-xs-12 aqa-mean-menu"></div>
		</div>
	</div>	
</div>
</header>