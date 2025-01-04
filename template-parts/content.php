<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nolimitbuzz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("no-limit-buzz--post"); ?>>
	<header class="no-limit-buzz--post-header">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
	</header><!-- .entry-header -->

	<div class="no-limit-buzz--post-content">
		<div class="no-limit-buzz--post-content-title">
			<?php the_title("<h1>", "</h1>"); ?>
			<div class="no-limit-buzz--post-content-title-info">
				<p>
					<span>Written by</span>
					<span><?php the_author(); ?></span>
				</p>
				<p>
					<span><?php the_date(); ?></span>
				</p>
			</div>
		</div>
		<hr>
		<div class="no-limit-buzz--post-content-text">
			<?php
			the_content();
			?>
		</div>
	</div><!-- .entry-content -->

	<footer class="no-limit-buzz--post-footer">
		<a href="javascript:void(0)">
			<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21 41.8334C32.5 41.8334 41.8333 32.5 41.8333 21C41.8333 9.50004 32.5 0.166702 21 0.166702C9.49996 0.166702 0.166626 9.50004 0.166626 21C0.166626 32.5 9.49996 41.8334 21 41.8334ZM23.0833 21V29.3334H18.9166V21H12.6666L21 12.6667L29.3333 21H23.0833Z" fill="#662BC5" />
			</svg>
		</a>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->