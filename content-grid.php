<?php
/**
 * The template part for displaying results in a masonry grid.
 *
 * @package cultural
 */
?>

<article <?php post_class(); ?>>
    <?php if ( '' != get_the_post_thumbnail() ) { ?>
        <figure class="entry__image">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
        </figure>
    <?php } ?>
    <header class="entry-header  cf">
        <?php cultural_categories(); ?>
        <?php cultural_the_format(); ?>
        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <?php cultural_the_time(); ?>
    </header><!-- /entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- /entry-summary -->

    <footer class="entry-footer">
        <a href="<?php the_permalink(); ?>" title="<?php printf( __( 'Permalink to &ldquo;%s&rdquo;', 'cultural' ), the_title_attribute('echo=0') ); ?>" rel="bookmark" class="u-pull-right"><i class="fa fa-link"></i></a>
        <a href="<?php the_permalink(); ?>" class="read-more"><i class="fa fa-align-left"></i> <?php _e( 'Read more', 'cultural' ); ?></a>
    </footer><!-- /entry-footer -->
</article><!-- /post-<?php the_ID(); ?> -->