<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package finasana
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main col-xs-12" role="main">

		<?php
		while ( have_posts() ) : the_post();

			?>
			<div>
				<div class="col-lg-6 col-md-12 header-single-wrap">
					<div class='title-article-single'>
						<div class="col-xs-4 img-wrap-single">
							<div class='img-single'><?php the_post_thumbnail(150, 150 , 50); ?> </div>
						</div>
						<div class="col-xs-8 header-wrap-single">
							<div class="title-article-single"><?php the_title( '<h1>', '</h1>' ); ?></div> 
							<div class="desc-single-post"> 
								<?php finasana_posted_on(); ?> | <?php echo  get_the_author();  ?> 
							</div>
							<div class='categories-single'> Category: <?php  echo get_the_category_list(); ?> </div>
						</div>
					</div> 
				</div>

				<div class="col-lg-6 col-md-12 content-single-wrap ">
					<div  class='single-wrap'>
						<div class='content-article'>
							<?php the_content() ?>
						</div>
					</div> 
				</div>
			</div>

			<?php

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				//comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
