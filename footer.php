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

		<div class="footer-bottom">
			<p>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> Red Rock Concrete Coatings</p>

			<a href="https://www.facebook.com/RedRockConcreteCoatings/" class="footer-social" target="_blank" rel="noopener" aria-label="Red Rock Concrete Coatings on Facebook (opens in a new tab)">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
					<path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12z"/>
				</svg>
			</a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
