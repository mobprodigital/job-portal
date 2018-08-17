<?php
/**
 * The template for displaying Archive pages.
 *
 * @package zerif-lite
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<?php zerif_after_header_trigger(); ?>
<div id="content" class="site-content">

<div class="container">
<h1>Heloo Moto</h1>

	<?php zerif_before_archive_content_trigger(); ?>

	<div class="content-left-wrap col-md-9">

		<?php zerif_top_archive_content_trigger(); ?>

		<div id="primary" class="content-area">

			<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">

					<?php
						/* Title */
						/* zerif_page_header_title_archive_trigger(); */
						echo '<div class="jobs-listing-title">'.
							  '<h3> <i class="fa fa-briefcase"></i> JOBS </h3>'.
							'</div>'.
						
						/* Optional term description */
						zerif_page_term_description_archive_trigger();
					?>

				</header><!-- .page-header -->

				<?php

				while ( have_posts() ) :
					the_post();

					$job_info_brief =  '<div>'.
									 
									'<div class= "job-boxes">'.
										'<div class= "boxes" >'.
											'<div class= "box"> '.$client_name.'	</div>'.
											'<div class= "box">'.
												'<p class="job-position"> '.$job_role.' </p>'.
												'<small> '.$job_skill.' </small>'.
											'</div>'.
											'<div class= "box"> '.$job_location.' </div>'.
											' <div class= "box">'.$job_experience.'</div>'.
										'</div> <!--boxes end-->'. 
									'</div><!--Job boxes-->';
									echo $job_info_brief;

						/**
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */

						// get_template_part( 'content', get_post_format() );

					endwhile;

					echo get_the_posts_navigation(
						array(
							/* translators: Newer posts arrow */
							'next_text' => sprintf( __( 'Newer posts %s', 'zerif-lite' ), '<span class="meta-nav">&rarr;</span>' ),
							/* translators: Older posts arrow */
							'prev_text' => sprintf( __( '%s Older posts', 'zerif-lite' ), '<span class="meta-nav">&larr;</span>' ),
						)
					);

				else :

					get_template_part( 'content', 'none' );

				endif;
				?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<?php zerif_bottom_archive_content_trigger(); ?>

	</div><!-- .content-left-wrap -->

	<?php zerif_after_archive_content_trigger(); ?>

	<?php zerif_sidebar_trigger(); ?>

</div><!-- .container -->

<?php get_footer(); ?>
