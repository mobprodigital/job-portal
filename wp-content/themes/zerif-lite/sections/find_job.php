<?php
/**
 * Find Job section
 *
 * @package zerif-lite
 */

zerif_before_our_team_trigger();

$zerif_ourteam_show = get_theme_mod( 'zerif_ourteam_show' );

echo '<section class="job-search ' . ( ( is_customize_preview() && ( ! isset( $zerif_ourteam_show ) || $zerif_ourteam_show == 1 ) ) ? ' zerif_hidden_if_not_customizer ' : '' ) . '" id="team">';
	zerif_top_our_team_trigger();
    $html =  '<div class="container">'.
                '<div class="job-search-wrapper">'.
                    '<h2 class= "job-search-title"> Find a Job  </h2>'.
                    '<form class= "pirate_forms" method="get" action="'.home_url( "/" ).'">'    
                        .'<input type="hidden" value="job" name="post_type">'         
                        .'<div class= "row">'.
                            '<div class="col-md-7 form-col">'.
                                '<div class="form-group has-feedback">'.
                                    '<label class="text-label text-label-form" for="s">Search for</label>'.
                                    '<input class="form-control input" type="text" name="s" id="s" placeholder="Keywords (IT Engineer, Shop Manager, Hr Manager...)" required="required">'.
                                    '<span class="fa fa-search form-control-feedback"></span>'.
                                '</div>'./* form-group has-feedback */
                            '</div>'.    /* col-md-7 */

                            '<div class="col-md-5 form-col">'
                                .'<div style="margin-bottom: 4px;">&nbsp;</div>'
                                .'<button class="btn btn-default btn-job-search button btn-block" type="submit" name="submit" value="search"> <i class="fa fa-search"></i> Search</button>'.
                            '</div>'.    /* col-md-5 */                   
                        '</div>'. /* Row End */
                    '</form>';
                '</div>'; /* Job search Wrapper */            

if ( is_active_sidebar( 'sidebar-ourteam' ) ) {
      
    echo $html;

	echo '</div> ';
} elseif ( current_user_can( 'edit_theme_options' ) ) {

	if ( is_customize_preview() ) {
		/* translators: Our team section */
		printf( __( 'Add widgets in this area by going to the %s', 'zerif-lite' ), __( 'Our team section', 'zerif-lite' ) );
	} else {
		/* translators: Our team section in customizer */
		printf( __( 'Add widgets in this area by going to the %s', 'zerif-lite' ), sprintf( '<a href="%1$s" class="zerif-default-links">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;section&#93;=sidebar-widgets-sidebar-ourteam' ) ), __( 'Find a Job', 'zerif-lite' ) ) );
	}
}

	echo '</div>';

	zerif_bottom_our_team_trigger();

echo '</section>';

zerif_after_our_team_trigger();

