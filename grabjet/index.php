<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Grab_JET
 * @since Grab JET
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php 
       
			$args=array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => '3',
			'orderby' => 'ASC',);
			$post_query = null;
			$post_query = new WP_Query($args);
			
			if( $post_query->have_posts() ) 
			{
			?>
				<div class="row">
			<?php			
			
					while ($post_query->have_posts()) : $post_query->the_post(); ?>
					
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<div class="post_img text-center">
								   <?php 
									   if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
										   the_post_thumbnail( 'medium' ); 
									   } 
								   ?>
								</a>
							</div>
						    <div class="post_desc text-center">
								<?php echo  the_content() ?>
							</div>
						</div>
					<?php
					endwhile;
					?>					
				</div>
			<?php
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	
<?php get_footer(); ?>