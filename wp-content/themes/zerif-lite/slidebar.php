<?php
/**
 * The Template for displaying all single posts.
 *
 * @package zerif-lite
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>
<div class="col-md-4 sticky-section">
	<div class="row clearfix sidebar">
		<?php echo do_shortcode('[metaslider id="61"]'); ?>
	</div><!-- .row.clearfix.sidebar -->
</div>
