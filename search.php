<?php
get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <header class="page-header">
				<?php if ( have_posts() ) { ?>
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'hpmv4' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php } else { ?>
                    <h1 class="page-title"><?php _e( 'Nothing Found', 'hpmv4' ); ?></h1>
				<?php } ?>
            </header>
			<section id="search-results">
<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'content', get_post_format() );
		}

		the_posts_pagination([
			'prev_text' => __( '&lt;', 'hpmv4' ),
			'next_text' => __( '&gt;', 'hpmv4' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'hpmv4' ) . ' </span>',
		]);

	} else { ?>
            	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hpmv4' ); ?></p>
<?php
		get_search_form();
	} ?>
			</section>
			<aside class="column-right">
                <?php get_template_part( 'sidebar', 'none' ); ?>
			</aside>
		</main>
	</section>
<?php get_footer(); ?>