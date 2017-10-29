<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package suburbangrown
 */

get_header(); ?>

    <div id="main-content" class="large-9 cell">
    <?php
    if (have_posts()):while(have_posts()): the_post();?>
    <?php the_post_thumbnail(); ?></php>
    <h1 id="article-heading"><?php the_title();?></h1>
    <p><?php the_content(__('(more...)'));?></p>
<?php endwhile; else: ?>
<p><?php_e('Sorry, no posts');?></p><?php endif;?>
    </div>



    <?php
get_sidebar();
get_footer();?>