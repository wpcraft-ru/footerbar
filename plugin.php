<?php 
/**
 * Plugin Name: FooterBar
 * Plugin URI: https://github.com/uptimizt/footerbar
 * Description: FooterBar
 * Author: WPCraft
 * Author URI: https://wpcraft.ru/
 * Developer: WPCraft
 * Developer URI: https://wpcraft.ru/
 * Text Domain: useraccount
 * Domain Path: /languages
 * PHP requires at least: 5.6
 * WP requires at least: 5.0
 * Tested up to: 5.6
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Version: 0.1
 */


namespace FooterBar;

class Core {

    public static function init(){

        add_action( 'wp_footer', 'storefront_handheld_footer_bar', 999 );

        //XXX add scss 

    }

    function render_footer_bar() {
		$links = array(
			'my-account' => array(
				'priority' => 10,
				'callback' => '#',
			),
			'search'     => array(
				'priority' => 20,
				'callback' => 'storefront_handheld_footer_bar_search',
			),
			'cart'       => array(
				'priority' => 30,
				'callback' => '#',
			),
		);

		$links = apply_filters( 'wpc_footer_bar_links', $links );
		?>
		<div class="storefront-handheld-footer-bar">
			<ul class="columns-<?php echo count( $links ); ?>">
				<?php foreach ( $links as $key => $link ) : ?>
					<li class="<?php echo esc_attr( $key ); ?>">
						<?php
						if ( $link['callback'] ) {
							call_user_func( $link['callback'], $key, $link );
						}
						?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php
	}
}

Core::init();