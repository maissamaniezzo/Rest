		<footer>
			<nav class="nav-footer">
				<?php
					$args = array(
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu( $args );
				?>
			</nav>

			<p><?php bloginfo('name'); ?> © <?php echo date("Y"); ?>. Alguns direitos reservados.</p>
		</footer>

		<!-- Footer wordpress -->
		<?php wp_footer(); ?>
		<!-- Fecha Footer wordpress -->

	</body>
</html>