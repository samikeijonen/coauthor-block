<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php
		if ( function_exists( 'coauthors' ) ) {
			coauthors( $between = ', ', $betweenLast = ', ' );
		} else {
			the_author();
		}
	?>
</p>
