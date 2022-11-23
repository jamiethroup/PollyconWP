
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer pb-12" role="contentinfo">
	<div class="bg-primary py-12">
		<div class="container mx-auto grid grid-cols-2">
			<div class="text-left max-w-md">
				<h2>Like what you see? Lets work together</h2>
			</div>
			<div class="flex items-center justify-end">
				<a href="#" class="button light">CONTACT ME</a>
			</div>
		</div>
	</div>
	<div class="bg-white py-12">
		<div class="container mx-auto grid grid-cols-2">
			<div>
			<img class="w-10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-black.svg" alt="Pollycon Logo in Black">
			</div>
			<div class="footer-menu">
				
			<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => '',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4 block text-right text-gray-400 text-sm font-semibold font-body',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</div>
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto px-4 md:-px-0 text-left font-semibold text-gray-400 text-sm">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>
<script>
  AOS.init();
</script>
</body>
</html>
