<?php
/**
 * Single Template
 *
 * This file contains the markup for the single template.
 *
 * @package Crio
 */
?>
<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class ="article-wrapper">
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'crio' ), 'after' => '</p></nav>' ) ); ?>
			</div><!-- .entry-content -->
			<footer class="entry-footer">
				<?php boldgrid_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			<?php boldgrid_post_nav(); ?>
			<?php if ( comments_open() || get_comments_number() ) : ?>
				<?php comments_template( '/templates/comments.php' ); ?>
			<?php endif; ?>
		</div>
		<?php if ( BoldGrid::display_sidebar() && 'above' === get_theme_mod( 'bgtfw_global_title_position' ) ) : ?>
			<?php include BoldGrid::boldgrid_sidebar_path(); ?>
		<?php endif; ?>
	</article><!-- #post-## -->
<?php endwhile; ?>
