<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header">
	<div class="container">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/logo-header.png' ); ?>" alt="Red Rock Concrete Coatings" width="473" height="132">
		</a>

		<nav id="primary-nav" aria-label="Primary">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
				<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
				<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
				<li><a href="<?php echo esc_url( home_url( '/color-samples/' ) ); ?>">Colors</a></li>
				<li><a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>">Gallery</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
			</ul>
		</nav>

		<div class="header-cta">
			<a href="tel:+14358628841" class="header-phone">(435) 862-8841</a>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary">Get a Quote</a>
			<button class="nav-toggle" type="button" aria-label="Menu" aria-expanded="false" aria-controls="primary-nav">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
					stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
					<line x1="3" y1="6"  x2="21" y2="6"/>
					<line x1="3" y1="12" x2="21" y2="12"/>
					<line x1="3" y1="18" x2="21" y2="18"/>
				</svg>
			</button>
		</div>
	</div>
</header>
