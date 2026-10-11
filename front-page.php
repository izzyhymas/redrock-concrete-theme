<?php
get_header();

$test_image = get_stylesheet_directory_uri() . '/images/test-image.jpg';

$hero_image = $test_image;

if ( is_page() && has_post_thumbnail() ) {
	$hero_image = get_the_post_thumbnail_url( null, 'full' );
}

$services = redrock_service_pages();

$gallery_ids  = array();
$gallery_page = get_page_by_path( 'gallery' );

if ( $gallery_page ) {
	$gallery = get_post_gallery( $gallery_page, false );

	if ( is_array( $gallery ) && ! empty( $gallery['ids'] ) ) {
		$gallery_ids = array_slice( wp_parse_id_list( $gallery['ids'] ), 0, 6 );
	}
}
?>

<main id="main">

	<section class="hero">
		<div class="hero__media">
			<img class="hero__image" src="<?php echo esc_url( $hero_image ); ?>" alt="" fetchpriority="high" decoding="async">
		</div>

		<div class="hero__scrim" aria-hidden="true"></div>

		<div class="container hero__inner">
			<p class="eyebrow">St.&nbsp;George &amp; Southern Utah</p>

			<h1 class="hero__title">Concrete Coatings Built <br>for Red Rock Country</h1>

			<p class="hero__lead">
				Garage floor coatings, polished and stained concrete, sealing, and
				repairs, built to handle the Southern Utah sun.
			</p>

			<div class="actions">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">Get a Free Quote</a>
				<a href="tel:+14358628841" class="btn btn--ghost btn--lg">Call (435)&nbsp;862-8841</a>
			</div>
		</div>
	</section>

	<?php if ( $services ) : ?>
	<section class="section">
		<div class="container">
			<div class="section-header">
				<p class="eyebrow">What We Do</p>
				<h2>Everything your concrete needs</h2>
			</div>

			<?php get_template_part( 'parts/service-cards', null, array( 'services' => $services ) ); ?>
		</div>
	</section>
	<?php endif; ?>

	<?php if ( $gallery_ids ) : ?>
	<section class="section section--dark">
		<div class="container">
			<div class="section-header">
				<p class="eyebrow">Our Work</p>
				<h2>Recent projects</h2>
			</div>

			<div class="gallery">
				<?php foreach ( $gallery_ids as $image_id ) : ?>
					<?php echo wp_get_attachment_image( $image_id, 'medium_large', false, array( 'sizes' => '(max-width: 48rem) 50vw, 380px' ) ); ?>
				<?php endforeach; ?>
			</div>

			<a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>" class="btn btn--primary">View the Gallery</a>
		</div>
	</section>
	<?php endif; ?>

	<section class="section">
		<div class="container split">
			<img src="<?php echo esc_url( $test_image ); ?>" alt="" loading="lazy">

			<div>
				<p class="eyebrow">About Red Rock</p>
				<h2>A local team that sweats the details</h2>
				<p>Red Rock Concrete Coatings works with homeowners across St. George and Southern Utah. Concrete coatings are all we do, so every job gets our full attention.</p>
				<p>You'll get honest advice, careful prep, and a floor we're proud to put our name on.</p>
				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn--primary">More About Us</a>
			</div>
		</div>
	</section>

	<section class="section section--dark">
		<div class="container faq-layout">
			<div>
				<p class="eyebrow">FAQ</p>
				<h2>Common questions</h2>
				<p>Don't see your question here? Give us a call and we'll walk you through it.</p>
				<a href="tel:+14358628841" class="btn btn--ghost">Call (435)&nbsp;862-8841</a>
			</div>

			<div class="faq">
				<details>
					<summary>How long does installation take?</summary>
					<p>Most residential floors are finished in one day. We'll give you a timeline with your quote, and larger jobs may take a little longer.</p>
				</details>

				<details>
					<summary>How is polyurea different from epoxy?</summary>
					<p>Epoxy is a common budget option, but it can yellow in the sun and lift under hot tires. Polyurea coatings are more flexible, UV stable, and cure much faster, which makes them a better fit for Utah heat.</p>
				</details>

				<details>
					<summary>Will the floor be slippery?</summary>
					<p>We can add texture to the topcoat for extra grip. We recommend it for pool decks, patios, and anywhere that gets wet.</p>
				</details>

				<details>
					<summary>Can you fix cracks and stains first?</summary>
					<p>Yes. Cracks and pits are repaired during prep, and the coating covers old stains and discoloration.</p>
				</details>
			</div>
		</div>
	</section>

	<section class="section cta">
		<div class="container">
			<h2>Get a free estimate</h2>
			<p>Serving St. George, Washington, Hurricane, Ivins, Santa Clara, and the rest of Southern Utah.</p>

			<div class="actions">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">Get a Free Quote</a>
				<a href="tel:+14358628841" class="btn btn--outline btn--lg">Call (435)&nbsp;862-8841</a>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
