<?php
get_header();
the_post();

$services_page = get_page_by_path( 'services' );
$is_service    = $services_page && wp_get_post_parent_id() === $services_page->ID;
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
		<div class="container<?php echo $is_service ? ' service-layout' : ''; ?>">
			<?php if ( get_the_content() ) : ?>
				<div class="page-content">
					<?php the_content(); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_page( 'services' ) ) : ?>
				<?php get_template_part( 'parts/service-cards', null, array( 'services' => redrock_service_pages() ) ); ?>
			<?php endif; ?>

			<?php if ( $is_service ) : ?>
				<aside class="service-aside">
					<h2 class="eyebrow">Other Services</h2>
					<ul class="service-list">
						<?php foreach ( redrock_service_pages() as $service ) : ?>
							<?php if ( get_the_ID() !== $service->ID ) : ?>
								<li><a href="<?php echo esc_url( get_permalink( $service ) ); ?>"><?php echo esc_html( get_the_title( $service ) ); ?></a></li>
							<?php endif; ?>
						<?php endforeach; ?>
					</ul>
				</aside>
			<?php endif; ?>
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
