<?php
/*
Template Name: Speakers
*/
get_header();
?>


<div class="main-container speakers-section container">
    <div class="speakers-container">

        <?php
        wp_reset_postdata();
        $args = array(
            'post_type' => 'embs_speaker',
            'posts_per_page' => -1
        );
        $speakers = new WP_Query($args);
        if ($speakers->have_posts()) : while ($speakers->have_posts()) : $speakers->the_post();
                $img = has_post_thumbnail() ? get_the_post_thumbnail_url() : esc_url(get_template_directory_uri()) . "/assets/images/no-speaker.png";
        ?>

        <div class="speaker-card flex-fill">
            <div class="speaker-image">
                <img
                    src="<?php echo $img ?>"
                    alt="<?php echo get_the_title(); ?>"
                    class="img-fluid w-100" />
            </div>
            <div class="speaker-info">
                <h4><?php echo get_the_title(); ?></h4>
                <span class="affiliation"><?php echo get_field('affiliation'); ?></span>

                <?php the_content(); ?>
            </div>
        </div>

        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>

    </div>
</div>

<?php get_footer(); ?>