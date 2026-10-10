<?php get_header(); ?>

<main id="main">

	<section class="section not-found">
		<div class="container">
			<p class="eyebrow">404</p>
			<h1>Page not found</h1>
			<p class="lead">Sorry, we couldn't find that page. It may have moved, or the address might be mistyped.</p>

			<div class="actions">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">Back to Home</a>
				<a href="tel:+14358628841" class="btn btn--outline">Call (435)&nbsp;862-8841</a>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
