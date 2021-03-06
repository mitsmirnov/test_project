<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Snowbird
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="xf__container xf__entry-container">
		<?php
		/**
		 * Page Meta (for the Scheme markup).
		 */
		get_template_part( 'template-parts/page-meta' ); ?>

		<div class="content entry-content" itemprop="text">
			<?php
			/**
			 * Page Content
			 */
			the_content(); ?>

			<?php
			/**
			 * Pages Links
			 */
			wp_link_pages( array(
				'before'      => '<div class="xf__nav-pagination">' . esc_html__( 'Pages:', 'snowbird' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-numbers">',
				'link_after'  => '</span>'
			) ); ?>

			<?php
			/**
			 * Social Share
			 */
			if ( Snowbird()->mod( 'page_display_share_this' ) ) : ?>
				<footer class="xf__post-footer">
					<?php get_template_part( 'template-parts/share-this' ); ?>
				</footer>
			<?php endif; ?>
		</div>
	</div>
</article>
