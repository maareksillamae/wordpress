<?php
/**
 * Show messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/notice.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! $messages ){
	return;
}

?>
<?php foreach ( $messages as $message ) : ?>
	<div class="alert alert-info alert-white rounded">
		<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
		<div class="icon">
			<i class="fa fa-info"></i>
		</div>
		<div class="alert-message">
			<?php echo wp_kses_post( $message ); ?>
		</div>
	</div>
<?php endforeach; ?>
