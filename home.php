<?php

/**
 * The home template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nolimitbuzz
 */

get_header();
?>

<main class="no-limit-buzz--site-main">

    <section class="no-limit-buzz--site-main-section-1">
        <div class="no-limit-buzz--site-main-section-1-left">
            <div class="no-limit-buzz--site-main-section-1-left-title">
                <h2>
                    Make better
                    coffee
                </h2>
                <img src="<?php echo THEME_ASSETS_URI; ?>/img/coffee.svg" alt="Coffee image">
            </div>
            <div class="no-limit-buzz--site-main-section-1-left-description">
                <p>
                    why learn how to blog?
                </p>
            </div>
        </div>
        <div class="no-limit-buzz--site-main-section-1-right">
            <img src="<?php echo THEME_ASSETS_URI; ?>/img/hero-image.svg" alt="Hero image">
        </div>
    </section>

    <section class="no-limit-buzz--site-main-section-2">
        <div class="no-limit-buzz--site-main-section-2-container">
            <div class="no-limit-buzz--site-main-section-2-left">
                <div class="no-limit-buzz--site-main-section-2-left-title">
                    <h3>long established</h3>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....
                    </p>
                </div>
                <div class="no-limit-buzz--site-main-section-2-left-date">
                    <span>
                        May 20th 2020
                    </span>
                    <a href="#">
                        Read more
                    </a>
                </div>
            </div>
            <div class="no-limit-buzz--site-main-section-2-right" style="background-image: url('<?php echo THEME_ASSETS_URI; ?>/img/blog-img.png');">
                <!-- silent is golden -->
            </div>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();
