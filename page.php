<?php
get_header();
the_post();
?>

<main id="main">

	<section class="page-banner section--dark">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="page-content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
