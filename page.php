<?php
get_header();
the_post();
?>

<main id="main">

	<section class="page-banner section--dark<?php echo has_post_thumbnail() ? ' page-banner--image' : ''; ?>">
		<?php the_post_thumbnail( 'full', array( 'class' => 'page-banner__image', 'alt' => '', 'sizes' => '100vw', 'loading' => false, 'fetchpriority' => 'high' ) ); ?>

		<div class="container">
			<h1><?php the_title(); ?></h1>

			<?php if ( has_excerpt() ) : ?>
				<p class="lead"><?php echo esc_html( get_the_excerpt() ); ?></p>
			<?php endif; ?>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="page-content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>

	<section class="section cta">
		<div class="container">
			<div class="cta__divider">
				<h2>Like what you see?</h2>
				<p>Get a free estimate for your project.</p>

				<div class="actions">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">Get a Free Quote</a>
					<a href="tel:+14358628841" class="btn btn--outline btn--lg">Call (435)&nbsp;862-8841</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
