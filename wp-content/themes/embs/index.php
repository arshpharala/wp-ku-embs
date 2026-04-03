<?php
/**
 * Main Template File
 * 
 * This is the fallback template file displayed when no more specific template is found.
 * 
 * @package embs
 */

get_header(); ?>

<main id="main" class="site-main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
