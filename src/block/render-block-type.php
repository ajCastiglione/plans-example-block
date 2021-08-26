<?php
/**
 * Register Gutenberg block on server-side.
 *
 * Register the block on server-side to ensure that the block
 * scripts and styles for both frontend and backend are
 * enqueued when the editor loads.
 *
 * @link https://wordpress.org/gutenberg/handbook/blocks/writing-your-first-block-type#enqueuing-block-scripts
 * @since 1.16.0
 * @package WPE
 */

register_block_type(
	'cgb/reactwpe',
	array(
		'render_callback' => 'render_test_block',
	)
);

function render_test_block( $attributes, $content ) { //phpcs:ignore

	if ( ! is_admin() ) {
		wp_enqueue_style( 'react-app-styles', plugins_url( '../dist/react.build.css', dirname( __FILE__ ) ), null, '1.0' );
		wp_enqueue_script( 'react-app', plugins_url( '../dist/react.build.js', dirname( __FILE__ ) ), null, '1.0', true );

		// WP Localized globals. Use dynamic PHP stuff in JavaScript via `cgbGlobal` object.
		wp_localize_script(
			'react-app',
			'attributes', // Array containing dynamic data for a JS Global.
			array(
				'content' => $attributes['body'],
				// Add more data here that you want to access from `attributes` object.
			)
		);
	}

	ob_start(); ?>
	<div id="appRoot" class="test-block">
		test
	</div>

	<?php
	return ob_get_clean();
}
