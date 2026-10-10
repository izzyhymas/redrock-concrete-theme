<?php
get_header();
the_post();
?>

<main id="main">

	<section class="page-banner section--dark">
		<div class="container">
			<p class="eyebrow">Contact</p>
			<h1>Get a free quote</h1>
			<p class="lead">Tell us a little about your project and we'll get back to you.</p>
		</div>
	</section>

	<section class="section">
		<div class="container contact-layout">
			<div class="page-content">
				<?php the_content(); ?>
			</div>

			<aside class="contact-details">
				<h2 class="eyebrow">Call Us</h2>
				<p><a href="tel:+14358628841">(435) 862-8841</a></p>

				<h2 class="eyebrow">Email</h2>
				<p><a href="mailto:redrockconcretecoatings@gmail.com">redrockconcretecoatings<wbr>@gmail.com</a></p>

				<h2 class="eyebrow">Service Area</h2>
				<p>St.&nbsp;George, Washington, Hurricane, Ivins, Santa Clara, and the rest of Southern Utah.</p>
			</aside>
		</div>
	</section>

</main>

<?php get_footer(); ?>
