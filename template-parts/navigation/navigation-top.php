<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage The_Vulpe_Venture
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'thevulpeventure' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo thevulpeventure_get_svg( array( 'icon' => 'bars' ) );
		echo thevulpeventure_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'thevulpeventure' );
		?>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

	<?php if ( ( thevulpeventure_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo thevulpeventure_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'thevulpeventure' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
