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

</main><!-- #main -->

<?php
get_footer();
