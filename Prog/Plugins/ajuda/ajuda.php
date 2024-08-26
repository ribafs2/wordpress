<?php
/**
 * Plugin Name:     Ajuda
 * Plugin URI:      http://backup/wp/wp-admin/ajuda
 * Description:     Ajuda para o Ecoviver
 * Version:         1.0.0
 * Author:          Ribamar
 * Author URI:      https://ribamar.net.br
 * License:         MIT
 * Text Domain:     ajuda
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Display Ajuda in WP Admin.
 *
 * @since 1.0.0
 */
function ajuda() {
	echo '<a href="http://backup/wp/wp-admin/ajuda">Ajuda</a>';
}
add_action( 'admin_notices', 'ajuda' );
