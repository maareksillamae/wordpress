<?php
/**
 * Template part for displaying page content in page.php
 * @package log-book
 * @version 1.0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

	<div class="page-inner-wrap">
	
    	<?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('full'); ?>
            </div>
		<?php endif; ?>
        <div class="entry-content">
            <?php
                the_content();
    
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'log-book' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <div class="entry-footer">
            <?php log_book_edit_link( get_the_ID() ); ?>
        </div>
	</div>
    
</article><!-- #post-## -->
