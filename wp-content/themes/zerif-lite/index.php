<?php
/**
 * The main template file.
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package zerif-lite
 */

get_header(); ?>
<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<?php zerif_after_header_trigger(); ?>
<div id="content" class="site-content">

	<div class="container">

		<div class="content-left-wrap col-md-9">

			<div id="primary" class="content-area">

				<main id="main" class="site-main">

				<?php
				if ( have_posts() ) {

					while ( have_posts() ) {
						the_post();

						/**
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */

						get_template_part( 'content', get_post_format() );

					}

					echo get_the_posts_navigation(
						array(
							/* translators: Newer posts navigation arrow */
							'next_text' => sprintf( __( 'Newer posts %s', 'zerif-lite' ), '<span class="meta-nav">&rarr;</span>' ),
							/* translators: Older posts navigation arrow */
							'prev_text' => sprintf( __( '%s Older posts', 'zerif-lite' ), '<span class="meta-nav">&larr;</span>' ),
						)
					);

				} else {

					get_template_part( 'content', 'none' );

				}
				?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .content-left-wrap -->

		<?php zerif_sidebar_trigger(); ?>

	</div><!-- .container -->

<?php get_footer(); ?>
