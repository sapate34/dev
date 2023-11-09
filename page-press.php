<?php
/*
Template Name: Press Room
*/

get_header(); ?>
<style>
	.page #main {
		background-color: transparent;
	}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
			while ( have_posts() ) {
				the_post(); ?>
			<header class="page-header column-left">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<p>The latest press releases and information about Houston Public Media.</p>
			</header>
			<div class="column-right page-content">
				<?PHP the_content(); ?>
			</div>
<?php
				$cat_no = get_post_meta( get_the_ID(), 'hpm_series_cat', true );
				if ( !empty( $cat_no ) ) {
					$terms = get_terms( [ 'include'  => $cat_no, 'taxonomy' => 'category' ] );
					$term = reset( $terms );
					$cat = new WP_query([
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

						wp_reset_postdata(); ?><?php wp_pagenavi( array( 'query' => $cat ) ); ?>
				<!--<div class="readmore">
					<a href="/topics/<?php /*echo $term->slug; */?>/page/2">View More <?php /*echo $term->name; */?></a>
				</div>-->
			</section>
		<?php
					}
				} ?>
			<aside class="column-right">
				<?php get_template_part( 'sidebar' ); ?>
			</aside>
	<?php
		} ?>
		</main>
	</div>
<?php get_footer(); ?>
