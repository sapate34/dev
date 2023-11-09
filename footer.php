			</div>
            <?php
            if ( get_queried_object_id() == 61383  ) { ?>

                <section class="contactus-banner">
                    <h2>Interested in Studio Tour?</h2>
                    <a href="/contact-us">Contact Us</a>

                </section>
            <?php } ?>
<?php if ( is_page_template( 'page-blank.php' ) ) { ?>
		</div>
<?php } else { ?>
			<h2 id="foot-banner"><a href="/support">Resources like these are made possible by the generosity of our community of donors, foundations, and corporate partners. Join others and make your gift to Houston Public Media today!<br /><br /><span class="donate"><?php echo hpm_svg_output( 'heart' ); ?> DONATE</span></a></h2>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container">
					<div class="footer-section footer-top">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>Features</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 56045,
                                ]);
                                ?>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>Topic</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 56046,
                                ]);
                                ?>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>Art & Culture</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 56047,
                                ]);
                                ?>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>Awareness</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 56048,
                                ]);
                                ?>
							</div>
						</div>
					</div>
					<div class="footer-section footer-middle">
						<h2>Programs & podcasts</h2>
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>Local Programs</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 56049,
                                ]);
                                ?>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>UH</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 56050,
                                ]);
                                ?>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>Education</h3>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>Podcasts</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 56051,
                                ]);
                                ?>

							</div>
						</div>
					</div>
					<div class="footer-section footer-middle">
						<h2>Support</h2>
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>Membership</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 56052,
                                ]);
                                ?>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>Giving Programs</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 56053,
                                ]);
                                ?>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>Volunteers</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 56054,
                                ]);
                                ?>
                                <h3>Partnerships</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 56055,
                                ]);
                                ?>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3">
								<h3>Compliance</h3>
                                <?php
                                wp_nav_menu([
                                    'menu_class' => 'nav-menu',
                                    'menu' => 42803,
                                ]);
                                ?>
							</div>
						</div>
					</div>

					<div class="footer-section footer-last">
                        <?php
                        wp_nav_menu([
                            'menu_class' => 'nav-menu',
                            'menu' => 1956,
                        ]);
                        ?>
						<div class="footer-tag">
							<p>Houston Public Media is supported with your gifts to the Houston Public Media Foundation and is licensed to the <a href="https://www.uh.edu" rel="noopener" target="_blank">University of Houston</a></p>
							<p>&copy; <?php echo date('Y'); ?> Houston Public Media</p>
						</div>
						<div class="d-flex social-icon-wrap">
							<div class="social-icon facebook">
								<a href="https://www.facebook.com/houstonpublicmedia" rel="noopener" target="_blank"><?php echo hpm_svg_output( 'facebook' ); ?></a>
							</div>
							<div class="social-icon twitter">
								<a href="https://twitter.com/houstonpubmedia" rel="noopener" target="_blank"><?php echo hpm_svg_output( 'twitter' ); ?></svg></a>
							</div>
							<div class="social-icon instagram">
								<a href="https://instagram.com/houstonpubmedia" rel="noopener" target="_blank"><?php echo hpm_svg_output( 'instagram' ); ?></a>
							</div>
							<div class="social-icon youtube">
								<a href="https://www.youtube.com/user/houstonpublicmedia" rel="noopener" target="_blank"><?php echo hpm_svg_output( 'youtube' ); ?></a>
							</div>
							<div class="social-icon linkedin">
								<a href="https://linkedin.com/company/houstonpublicmedia" rel="noopener" target="_blank"><?php echo hpm_svg_output( 'linkedin' ); ?></a>
							</div>
						</div>

					</div>

				</div>
                <nav id="uh-foot-navigation" class="footer-navigation" role="navigation">
                    <?php wp_nav_menu( [ 'menu_class' => 'nav-menu', 'menu' => 56058 ] ); ?>
                </nav>
			</footer>
		</div>
<?php }
		wp_footer(); ?>
	</body>
</html>