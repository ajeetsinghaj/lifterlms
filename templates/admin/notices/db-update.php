<?php
/**
 * Database Update Notice
 *
 * @since  3.0.0
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( ! is_admin() ) { exit; }
?>
<p><strong><?php _e( 'The LifterLMS database needs to be updated to the latest version.', 'lifterlms' ); ?></strong></p>
<p><?php _e( 'The update will only take a few minutes and it will run in the background. A notice like this will let you know when it\'s finished.', 'lifterlms' ); ?></p>
<p><a class="button-primary" id="llms-start-updater" href="<?php echo wp_nonce_url( admin_url( 'admin.php?page=llms-settings' ), 'do_db_updates', 'llms-db-update' ); ?>"><?php _e( 'Run the Updater', 'lifterlms' ); ?></a></p>
<script type="text/javascript">
	jQuery( '#llms-start-updater' ).on( 'click', function() {
		return window.confirm( '<?php echo esc_js( __( 'We strongly recommended that you backup your database before proceeding. Are you sure you wish to run the updater now?', 'lifterlms' ) ); ?>' );
	});
</script>
