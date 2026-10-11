<?php
$services   = $args['services'];
$test_image = get_stylesheet_directory_uri() . '/images/test-image.jpg';
?>

<div class="grid-3">
	<?php foreach ( $services as $service ) : ?>
		<article class="card">
			<?php if ( has_post_thumbnail( $service ) ) : ?>
				<?php echo get_the_post_thumbnail( $service, 'medium_large', array( 'alt' => '', 'sizes' => '(max-width: 48rem) 100vw, 380px' ) ); ?>
			<?php else : ?>
				<img src="<?php echo esc_url( $test_image ); ?>" alt="" loading="lazy">
			<?php endif; ?>

			<h3><?php echo esc_html( get_the_title( $service ) ); ?></h3>

			<?php if ( has_excerpt( $service ) ) : ?>
				<p><?php echo esc_html( get_the_excerpt( $service ) ); ?></p>
			<?php endif; ?>

			<a href="<?php echo esc_url( get_permalink( $service ) ); ?>" class="link-arrow">Learn more<span class="screen-reader-text"> about <?php echo esc_html( get_the_title( $service ) ); ?></span></a>
		</article>
	<?php endforeach; ?>
</div>
