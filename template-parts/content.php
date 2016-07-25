<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package finasana
 */

?>
<div class="col-lg-6 col-md-12 left-articles-container articles-container rst-padding" >
<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-xs-12 bounceInUp' );  ?> >
	<header class="entry-header">
			<div class="img-aticle col-xs-3 rst-padding">
				<?php if ( has_post_thumbnail()) { ?>
					<?php the_post_thumbnail('blog-thumb'); ?>
				<?php } else { ?>
					<img src="<?php bloginfo('template_url'); ?>/images/no-thumb.png" />
				<?php } ?>
			</div>


<div class="title-article col-xs-9">
		<?php
			if ( is_single() ) {
				the_title( '<h1>', '</h1>' );
			} else {
				the_title( '<h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			} ?>
</div>
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<span class="publish-date-article">
			<?php finasana_posted_on(); ?>
            
		</span><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content col-xs-12 col-sm-9">
		<?php
			?> 
			<div class='excerpt-article'>
				<?php
					the_excerpt( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'finasana' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) ); 
				?>
				<a href="<?php echo get_permalink(); ?>" class='dots-excerpt-link'> [...] </a>
			</div>

			<?php 
			/*wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'finasana' ),
				'after'  => '</div>',
			) );*/
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer hidden">
		<?php finasana_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<a href="<?php echo get_permalink(); ?>" rel="bookmark"><span class='more-link'></span></a>
</article><!-- #post-## -->
</div>