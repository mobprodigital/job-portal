<?php
/**
 * About us section
 *
 * @package zerif-lite
 */
?>
    <div class="companies-listing">
<?php
	if ( is_active_sidebar( 'sidebar-aboutus' ) ) :

		$zerif_aboutus_clients_title_text = get_theme_mod( 'zerif_aboutus_clients_title_text' );

		echo '<div class="our-clients about-clients">';

		if ( ! empty( $zerif_aboutus_clients_title_text ) ) {

            echo '<div class="section-header "><h2> Companies who have posted jobs </h2>
                  
                  </div>';
             
		} elseif ( is_customize_preview() ) {

			echo '<h5><span class="section-footer-title"></span></h5>';

		}

			echo '</div>';

			echo '<div class="client-list about-clients">';
			echo '<div data-scrollreveal="enter right move 60px after 0.00s over 2.5s">';
			dynamic_sidebar( 'sidebar-aboutus' );
			echo '</div>';
			echo '</div> ';
			endif;
    ?>
    </div> <!-- companies-listing -->