<?php
/**
 * Our Team section
 *
 * @package zerif-lite
 */

zerif_before_our_team_trigger();

$zerif_ourteam_show = get_theme_mod( 'zerif_ourteam_show' );

echo '<section class="our-team ' . ( ( is_customize_preview() && ( ! isset( $zerif_ourteam_show ) || $zerif_ourteam_show == 1 ) ) ? ' zerif_hidden_if_not_customizer ' : '' ) . '" id="team">';

	zerif_top_our_team_trigger();

	echo '<div class="container">';

		echo '<div class="section-header">';

			/* Title */
            $heading =  '<div class= "row">'.
                            '<div class= "col-sm-8">'.
                                '<div class="jobs-listing-title">'.
                                    '<h3 class= "jobs-listing-title"><i class="fa fa-briefcase"></i>Recent Jobs</h3>'.
                                '</div><!--Jobs Listing Title-->'. 
                                '<div class= "job-boxes">'.
                                    '<div class= "boxes" >'.
                                        '<div class= "box">
                                            Microsoft 
                                        </div>'.
                                        '<div class= "box">'.
                                            '<p class="job-position"> General Manager </p>'.
                                            '<small> Promoting and marketing, Overseeing stock levels, Planning menus </small>'.
                                        '</div>'.
                                        '<div class= "box">
                                                Gourgoun
                                        </div>'.
                                        ' <div class= "box">
                                                5 Years
                                        </div>'.
                                    '</div> <!--boxes end-->'. 
                                '</div><!--Job boxes-->'. 

                            '</div><!--Col Sm 8 End-->'.
               
                            '<div class= "col-sm-4">'.
                                '<div class="jobs-listing-title">'.
                                    '<h3 class= "jobs-listing-title">Featured Jobs</h3>'.
                                '</div><!--Jobs Listing Title-->'.
                                '<div class="featured-jobs-box">'.
                                    '<div class="featured-jobs">'.
                                        '<img src="http://www.jobportal.com/wp-content/uploads/2018/08/join.jpg" alt="Jobs">'.
                                    '</div>'.
                                    '<div class="featured-jobs">'.
                                        '<div class= "featured-jobs-metadata">'.
                                            '<h4> Web Analyst</h4>'.
                                            '<p> Campaign strategy, Reporting and Analysis Client focus, Analytical and technical </p>'.
                                        '</div>'.
                                       ' <div>'.
                                        '</div>'.    
                                    '</div>'.
                                '</div> <!--featured jobs box-->'. 
                               '</div><!--Col Sm 4 End-->'. 
                                
                        '</div><!--Row End-->';

        echo '</div>';
        echo $heading;
      
                       
if ( is_active_sidebar( 'sidebar-ourteam' ) ) {
	echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';
     /* echo $heading; */ /* dynamic_sidebar( 'sidebar-ourteam' ); */
	echo '</div> ';
} elseif ( current_user_can( 'edit_theme_options' ) ) {

	if ( is_customize_preview() ) {
		/* translators: Our team section */
		printf( __( 'Add widgets in this area by going to the %s', 'zerif-lite' ), __( 'Our team section', 'zerif-lite' ) );
	} else {
		/* translators: Our team section in customizer */
		printf( __( 'Add widgets in this area by going to the %s', 'zerif-lite' ), sprintf( '<a href="%1$s" class="zerif-default-links">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;section&#93;=sidebar-widgets-sidebar-ourteam' ) ), __( 'Our team section', 'zerif-lite' ) ) );
	}
}

	echo '</div>';

	zerif_bottom_our_team_trigger();

echo '</section>';

zerif_after_our_team_trigger();
