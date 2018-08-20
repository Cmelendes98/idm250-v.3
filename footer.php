<footer>
	<nav class="clearfix">
				<?php 
            wp_nav_menu([
                'theme_location'  => 'header-menu',
                'container'       => 'div',
                'menu_class'      => 'nav navbar-nav navbar-right',
            ]);
        ?>

			</nav>

		</footer>
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/mobileNav.js'></script>
	</div>
</div>
		<?php wp_footer(); ?>

	</body>
</html>
