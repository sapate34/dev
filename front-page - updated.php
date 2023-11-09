<?php
/**
 * @package WordPress
 * @subpackage HPMv4
 * @since HPMv4 4.0
 */
get_header();
$articles = hpm_homepage_articles();
?>
    <style>
        #station-schedules {
            background-color: var(--main-element-background);
        }
        #station-schedules h4 {
            border-bottom: 0.125em solid var(--main-red);
            padding: 0.25em 1em;
            margin: 0;
            font: 400 2rem var(--hpm-font-condensed);
        }
        #station-schedules .station-now-play {
            padding: 0.5em 1em;
            border-bottom: 0.125em solid var(--main-background);
            min-height: 5em;
            display: grid;
            grid-template-columns: 30% 70%;
            align-items: center;
            gap: 1rem;
        }
        #station-schedules .station-now-play:last-child {
            border: 0;
        }
        #station-schedules .station-now-play > * {
            width: 100%;
        }
        #station-schedules .station-now-play h5 {
            padding: 0;
            margin: 0;
            font-size: 1rem;
            text-align: right;
        }
        #station-schedules .station-now-play h5 a {
            font-weight: 700;
            text-transform: uppercase;
        }
        #station-schedules .station-now-play h3 {
            font-weight: 100;
            font-size: 1.25rem;
            font-family: var(--hpm-font-condensed);
            padding: 0 0.5rem 0 0;
            margin: 0;
            color: var(--main-headline);
        }
        @media screen and (min-width: 34rem) {
            #station-schedules {
                display: grid;
                grid-template-columns: 50% 50%;
                width: 100%;
            }
            #station-schedules h4 {
                grid-column: 1/-1;
            }
            #station-schedules .station-now-play:nth-child(even) {
                border-right: 1px solid #808080;
            }
        }
        @media screen and (min-width: 52.5rem) {
            #station-schedules {
                display: block;
                width: 100%;
            }
            #station-schedules .station-now-play:nth-child(even) {
                border-right: 0;
            }
        }
    </style>
    <div id="primary" class="content-area">
        <?php election_homepage(); ?>
    <section class="section breaking-news">

    <div class="row">
            <?php echo hpm_showTopthreeArticles(); ?>
    </div>
    </section>
            <section class="section short-news">
                <ul class="list-none d-flex">
                    <?php foreach ( $articles as $ka => $va ) {
                        if($ka>=3 && $ka<8) {
                        get_template_part("content", "topnewsrail");

                     }
                    }?>
                </ul>
        </section>
        <!-- /.short-news -->

        <section class="section ads-full">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ads.jpg" /></a>
        </section>

        <section class="section slider-ads">
            <div class="row">
                <div class="col-9">
                    <div class="news-slider">
                        <div class="row">
                            <div class="col-6">
                                <div class="news-slider-info">
                                    <h4 class="text-light-gray">POLITICS</h4>
                                    <h2>15 Texas women say abortion bans denied or delayed crucial medical care</h2>
                                    <p>A lawsuit is asking the state of Texas to clarify what exactly the exceptions written in the law entail.</p>
                                </div>
                            </div>
                            <div class="col-6"><img src="<?php echo get_template_directory_uri(); ?>/images/news-img.jpg" /></div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/project-ad.jpg" />
                    <br>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/project-ad.jpg" />
                </div>
            </div>
        </section>

        <section class="section news-list">
            <div class="row">
                <div class="col-9 news-list-left">
                    <div class="row">
                        <div class="col-6">
                            <h2 class="title">
                                <strong>Local <span>News</span></strong>
                            </h2>
                            <ul class="list-none news-links">
                                <li>
                                    <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                        divisions in
                                        Collin County Republican Party</a>
                                </li>
                                <li>
                                    <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                        divisions in
                                        Collin County Republican Party</a>
                                </li>
                                <li>
                                    <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                        divisions in
                                        Collin County Republican Party</a>
                                </li>
                                <li>
                                    <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                        divisions in
                                        Collin County Republican Party</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h2 class="title">
                                <strong>Local <span>News</span></strong>
                            </h2>
                            <ul class="list-none news-links">
                                <li>
                                    <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                        divisions in
                                        Collin County Republican Party</a>
                                </li>
                                <li>
                                    <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                        divisions in
                                        Collin County Republican Party</a>
                                </li>
                                <li>
                                    <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                        divisions in
                                        Collin County Republican Party</a>
                                </li>
                                <li>
                                    <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                        divisions in
                                        Collin County Republican Party</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3 news-list-right">
                    <h2 class="title">
                        <strong>Most <span>Viewed</span></strong>
                    </h2>
                    <ul class="list-none news-links">
                        <li>
                            <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                divisions in
                                Collin County Republican Party</a>
                        </li>
                        <li>
                            <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                divisions in
                                Collin County Republican Party</a>
                        </li>
                        <li>
                            <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                divisions in
                                Collin County Republican Party</a>
                        </li>
                        <li>
                            <a href="#"><strong>POLITICS</strong> Impeachment of Texas AG Ken Paxton exposes
                                divisions in
                                Collin County Republican Party</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section radio-list">
            <h2 class="title">
                <strong>THIS WEEK on <span>TALK RADIO</span></strong>
            </h2>
            <div class="row">
                <div class="col-4">
                    <h3 class="title-style2">
                        <strong>HOUSTON <span>MATTERS</span></strong>
                    </h3>
                    <div class="image">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/news-img.jpg" /></a>
                    </div>
                    <ul class="list-none news-links">
                        <li>
                            <strong>
                                <a href="#">How Houston’s DJ Sun reimagined his
                                    music for a 25-piece orchestra</a>
                            </strong>
                        </li>
                        <li><a href="#">COVID emergency declaration ends (April 12, 2023)</a></li>
                        <li><a href="#">‘The Last of Us’ spotlights the very real threat of
                                fungal disease</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <h3 class="title-style2">
                        <strong>HOUSTON <span>MATTERS</span></strong>
                    </h3>
                    <div class="image">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/news-img.jpg" /></a>
                    </div>
                    <ul class="list-none news-links">
                        <li>
                            <strong>
                                <a href="#">How Houston’s DJ Sun reimagined his
                                    music for a 25-piece orchestra</a>
                            </strong>
                        </li>
                        <li><a href="#">COVID emergency declaration ends (April 12, 2023)</a></li>
                        <li><a href="#">‘The Last of Us’ spotlights the very real threat of
                                fungal disease</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <h3 class="title-style2">
                        <strong>HOUSTON <span>MATTERS</span></strong>
                    </h3>
                    <div class="image">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/news-img.jpg" /></a>
                        
                    </div>
                    <ul class="list-none news-links">
                        <li>
                            <strong>
                                <a href="#">How Houston’s DJ Sun reimagined his
                                    music for a 25-piece orchestra</a>
                            </strong>
                        </li>
                        <li><a href="#">COVID emergency declaration ends (April 12, 2023)</a></li>
                        <li><a href="#">‘The Last of Us’ spotlights the very real threat of
                                fungal disease</a></li>
                    </ul>
                </div>
            </div>
        </section>




    </div>
<?php get_footer(); ?>