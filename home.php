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

    <?php
    //get posts
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 7,
    );
    $posts = get_posts($args);
    ?>

    <?php
    //check if not empty
    if (!empty($posts)) :
        //get the first post
        $first_post = $posts[0];
        //shorten the post title
        $first_post->post_title = wp_trim_words($first_post->post_title, 7);
        //shorten the post content and trim
        $first_post->post_content = wp_trim_words($first_post->post_content, 20);
    ?>
        <section class="no-limit-buzz--site-main-section-2">
            <a href="<?php echo esc_url(get_permalink($first_post->ID)); ?>" style="text-decoration: none;">
                <div class="no-limit-buzz--site-main-section-2-container">
                    <div class="no-limit-buzz--site-main-section-2-left">
                        <div class="no-limit-buzz--site-main-section-2-left-title">
                            <h3><?php echo esc_html($first_post->post_title); ?></h3>
                            <p>
                                <?php echo esc_html($first_post->post_content); ?>
                            </p>
                        </div>
                        <div class="no-limit-buzz--site-main-section-2-left-date">
                            <span>
                                <?php echo esc_html($first_post->post_date); ?>
                            </span>
                            <a href="<?php echo esc_url(get_permalink($first_post->ID)); ?>">
                                Read more
                            </a>
                        </div>
                    </div>
                    <div class="no-limit-buzz--site-main-section-2-right" style="background-image: url('<?php echo get_the_post_thumbnail_url($first_post->ID); ?>');">
                        <!-- silent is golden -->
                    </div>
                </div>
            </a>
        </section>

        <section class="no-limit-buzz--site-main-section-3">
            <div class="no-limit-buzz--site-main-section-3-container">
                <?php
                //reassign posts
                $posts = array_slice($posts, 1);
                //loop through posts
                foreach ($posts as $post) :
                    //shorten the post title
                    $post->post_title = wp_trim_words($post->post_title, 7);
                    //shorten the post content and trim
                    $post->post_content = wp_trim_words($post->post_content, 15);
                ?>
                    <div class="no-limit-buzz--site-main-section-3-blog" onclick="window.location.href = '<?php echo esc_url(get_permalink($post->ID)); ?>'">
                        <div class="no-limit-buzz--site-main-section-3-blog-image">
                            <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="Blog image">
                        </div>
                        <div class="no-limit-buzz--site-main-section-3-blog-content">
                            <div class="no-limit-buzz--site-main-section-3-blog-content-title">
                                <h3>
                                    <?php echo esc_html($post->post_title); ?>
                                </h3>
                                <p>
                                    <?php echo esc_html($post->post_content); ?>
                                </p>
                            </div>
                            <div class="no-limit-buzz--site-main-section-3-blog-content-date">
                                <span>
                                    <?php echo esc_html($post->post_date); ?>
                                </span>
                                <a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
                <div class="no-limit-buzz--site-main-section-3-pagination">
                    <a href="#">
                        Previous
                    </a>
                    <a href="#">
                        Next
                    </a>
                </div>
            </div>
        </section>
    <?php
    endif;
    ?>
</main><!-- #main -->

<?php
get_footer();
