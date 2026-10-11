<footer class="site-footer">
	<div class="container">
		<div class="footer-grid">
			<div class="footer-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/logo-footer.png' ); ?>" alt="Red Rock Concrete Coatings" width="720" height="378" loading="lazy">
				</a>
				<p>Concrete coatings, polishing, and repair across St.&nbsp;George and Southern Utah.</p>
			</div>

			<nav aria-label="Footer">
				<h2 class="eyebrow">Explore</h2>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
					<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
					<li><a href="<?php echo esc_url( home_url( '/color-samples/' ) ); ?>">Color Samples</a></li>
					<li><a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>">Gallery</a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
				</ul>
			</nav>

			<div>
				<h2 class="eyebrow">Services</h2>
				<ul>
					<?php foreach ( redrock_service_pages() as $service ) : ?>
						<li><a href="<?php echo esc_url( get_permalink( $service ) ); ?>"><?php echo esc_html( get_the_title( $service ) ); ?></a></li>
					<?php endforeach; ?>
					<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">All Services</a></li>
				</ul>
			</div>

			<div>
				<h2 class="eyebrow">Contact</h2>
				<ul>
					<li><a href="tel:+14358628841">(435) 862-8841</a></li>
					<li><a href="mailto:redrockconcretecoatings@gmail.com">redrockconcretecoatings<wbr>@gmail.com</a></li>
					<li>Serving St.&nbsp;George &amp; Southern Utah</li>
				</ul>
			</div>
		</div>

		<p class="footer-bottom">&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> Red Rock Concrete Coatings</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
