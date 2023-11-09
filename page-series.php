<?php
/*
Template Name: Series
*/

get_header(); ?>
	<style>
		.page #main {
			background-color: transparent;
		}
		.page #main article {
			background-color: var(--main-element-background);
		}
	</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
			while ( have_posts() ) {
				the_post();
				echo hpm_head_banners( get_the_ID(), 'page' );?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php echo hpm_head_banners( get_the_ID(), 'entry' ); ?>
				<div class="entry-content">
					<?php
						the_content();
					?>
				</div>
			</article>
		<?php
			}
			$series_check = get_query_var( 'pagename' );
			if ( $series_check == 'series' ) {
				$cat = new WP_Query( [ 'post_parent' => get_the_ID(), 'post_type' => 'page', 'post_status' => 'publish', 'posts_per_page' => -1 ] );
			} else {
				$cat_no = get_post_meta( get_the_ID(), 'hpm_series_cat', true );
				$embeds = get_post_meta( get_the_ID(), 'hpm_series_embeds', true );
				$top =  get_post_meta( get_the_ID(), 'hpm_series_top', true );
				$terms = get_terms( [ 'include' => $cat_no, 'taxonomy' => 'category' ] );
				$term = reset( $terms );
				if ( empty( $embeds['order'] ) ) {
					$embeds['order'] = 'ASC';
				}
				$cat_args = [
					'cat' => $cat_no,
					'orderby' => 'date',
					'order' => $embeds['order'],
					'posts_per_page' => 15,
					'ignore_sticky_posts' => 1
				];
				if ( !empty( $top ) && $top !== 'None' ) {
					$top_art = new WP_Query([
						'p' => $top
					]);
					$cat_args['posts_per_page'] = 14;
					$cat_args['post__not_in'] = [ $top ];
				}
				$cat = new WP_Query( $cat_args );
			} ?>
			<aside class="column-right">
<?php
			if ( !empty( $embeds['twitter'] ) || !empty( $embeds['facebook'] ) ) { ?>
				<section id="embeds">
<?php
				if ( !empty( $embeds['twitter'] ) ) {
					echo '<h4>Twitter</h4>' . $embeds['twitter'];
				}
				if ( !empty( $embeds['facebook'] ) ) {
					echo '<h4>Facebook</h4>' . $embeds['facebook'];
				} ?>
				</section>
<?php
			}
			get_template_part( 'sidebar', 'none' ); ?>
			</aside>
		<?php
			if ( $cat->have_posts() ) { ?>
			<section id="search-results">
		<?php
				if ( !empty( $top_art ) ) {
					if ( $top_art->have_posts() ) {
						while ( $top_art->have_posts() ) {
							$top_art->the_post();
							get_template_part( 'content', get_post_format() );
						}
						wp_reset_query();
					}
				}
				while ( $cat->have_posts() ) {
					$cat->the_post();
					get_template_part( 'content', get_post_format() );
				}
				if ( $cat->found_posts > 15 ) { ?>
				<div class="readmore">
					<a href="/topics/<?php echo $term->slug; ?>/page/2">View More <?php echo $term->name; ?></a>
				</div>
		<?php
				}
				wp_reset_postdata();
				if ( !empty( $embeds['bottom'] ) ) {
					echo $embeds['bottom'];
				} ?>
			</section>
		<?php
			} ?>
		</main>
	</div>
<?php get_footer(); ?>
