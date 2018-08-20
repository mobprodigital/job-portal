<?php
/**
 * The Template for displaying all single posts.
 *
 * @package zerif-lite
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<!--<?php zerif_after_header_trigger(); ?>-->
<div id="content" class="site-content">
	<div class="container">

		<?php zerif_before_single_post_trigger(); ?>
		<div class="content-left-wrap col-md-9">
		
			<!-- <?php zerif_top_single_post_trigger(); ?> -->
			<div id="primary" class="content-area">
				<!-- <main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main"> -->
				<?php
				while ( have_posts() ) :
					the_post();
					$current_post_id = get_the_ID();
					$single_job_cat = wp_get_post_terms( $current_post_id, 'job_category');
					$single_job_cat_arr = array();
					foreach($single_job_cat as $s_m_cat){
						$single_job_cat_arr[] = $s_m_cat->name;                            
					}					
						$job_role = get_post_meta( $current_post_id, 'job_role', true );
                        $job_experience = get_post_meta( $current_post_id, 'job_experience', true );
                        $job_type = get_post_meta( $current_post_id, 'job_type', true );
                        $client_name = get_post_meta( $current_post_id, 'client_name', true );
                        $job_location = get_post_meta( $current_post_id, 'job_location', true );
						$job_exp_date = get_post_meta( $current_post_id, 'job_exp_date', true );
						$job_skill = get_post_meta( $current_post_id, 'job_skill', true );

						$job_single_html.= '<section>'
												.'<div class="text-right mb-20">
													<a href="mailto:girish.c@morrisdigital.mobi?Subject=Job%Application" class="btn btn-lg btn-success job-apply-btn">Apply Now</a>
												</div>'
												.'<div class = "single-job_show">'
													.'<div class="news-section-info clearfix"><h3 class= "job-search-heading">'.get_the_title()
														.'<div class="job-frame pull-right"><span> Last Date: </span>'.$job_exp_date.'</div>'
													.'</h3></div>'
													/*.get_the_post_thumbnail($current_post_id) */
												
												.'</div>'
												.'</br>'
												.'<article class="row">'
													.'<div class="col-md-4 job-sclient-img">'.(has_post_thumbnail() ? get_the_post_thumbnail($current_post_id) : '<img src="/wp-content/uploads/2018/08/client_default_img.png" alt="client image"/>').'</div>'
													.'<div class="col-md-8">'
														.'<div class="job-info-list">'
															.'<table class="table table-bordered table-inline">'
																.'<tr><th>Job Role</th><td> '.$job_role.'</td></tr>'
																.'<tr><th>Job Type</th><td> '.$job_type.'</td></tr>'
																.'<tr><th>Job Skills</th><td> '.$job_skill.'</td></tr>'
																.'<tr><th>Job Experience</th><td> '.$job_experience.'</td></tr>'
																.'<tr><th>Client Name</th><td> '.$client_name.'</td></tr>'
																.'<tr><th>Job Location</th><td> '.$job_location.'</td></tr>'
																.'<tr><th> Job Profile </th><td>'.implode(',', $single_job_cat_arr).'</td></tr>'
															.'</table>'
														.'</div><!--job-info-list-->'
													.'</div><!--col-md-8-->'
												.'</article>'
												.'<h4 class= "job-search-heading"> Job Description </h4>'
												.'<div class="job-content mb-40">' .get_the_content() .'</div><!--job-content-->'
												.'<div class="text-right mb-40">
													<a href="mailto:girish.c@morrisdigital.mobi?Subject=Job%Application" class="btn btn-lg btn-success job-apply-btn">Apply Now</a>
												</div>'
											.'</section><!--col-sm-->';
											echo $job_single_html; 
											
						the_post_navigation(
							array(
								'next_text' => _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'zerif-lite' ),
								'prev_text' => _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'zerif-lite' ),
							)
						);
						echo '<br/><br/>';
					
					endwhile; // end of the loop.
					?>
				</main><!-- #main -->
			</div><!-- #primary -->
			<?php zerif_bottom_single_post_trigger(); ?>
		</div><!-- .content-left-wrap -->
		<?php zerif_after_single_post_trigger(); ?>
		<?php zerif_sidebar_trigger(); ?>
	</div><!-- .container -->
<?php get_footer(); ?>
