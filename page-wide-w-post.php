<?php
/*
Template Name: Wide with Articles
*/

get_header();
$embeds = get_post_meta( get_the_ID(), 'hpm_series_embeds', true );
if ( !empty( $embeds ) ) {
	echo $embeds['bottom'];
} ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php echo hpm_head_banners( get_the_ID(), 'page' ); ?>
			<div class="column-span">
<?PHP
	while ( have_posts() ) {
		the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php echo hpm_head_banners( get_the_ID(), 'entry' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer class="entry-footer">
				<?PHP
					$tags_list = get_the_tag_list( '', _x( ' ', 'Used between list items, there is a space after the comma.', 'hpmv4' ) );
					if ( $tags_list ) {
						printf( '<p class="screen-reader-text"><span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span></p>',
							_x( 'Tags', 'Used before tag names.', 'hpmv4' ),
							$tags_list
						);
					}
					edit_post_link( __( 'Edit', 'hpmv4' ), '<span class="edit-link">', '</span>' ); ?>
				</footer>
			</article>
<?php
	} ?>
		</div>
<?php
	$cat_no = get_post_meta( get_the_ID(), 'hpm_series_cat', true );
	if ( !empty( $cat_no ) ) {
		$terms = get_terms( [ 'include'  => $cat_no, 'taxonomy' => 'category' ] );
		$term = reset( $terms );
		$cat = new WP_Query([
			'cat' => $cat_no,
			'orderby' => 'date',
			'order'   => 'DESC',
		]);
		if ( $cat->have_posts() ) { ?>
				<section id="search-results">
<?php
			while ( $cat->have_posts() ) {
				$cat->the_post();
				get_template_part( 'content', get_post_format() );
			}
			wp_reset_postdata(); ?>
					<div class="readmore">
						<a href="/topics/<?php echo $term->slug; ?>/page/2">View More <?php echo $term->name; ?></a>
					</div>
				</section>
<?php
		}
	} ?>
			<aside class="column-right">
				<?php get_template_part( 'sidebar', 'none' ); ?>
			</aside>
		</main>
	</div>
<?php get_footer(); ?>