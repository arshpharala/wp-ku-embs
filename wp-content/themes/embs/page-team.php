<?php
/*
Template Name: Speakers
*/
get_header();
?>
<div class="main-container office-bearers-section container">
  <div class="bearer-cards">
    <!-- Card -->

    <?php
    $args = array(
      'post_type' => 'team',
      'posts_per_page' => -1
    );

    $teams = new WP_Query($args);

    if ($teams->have_posts()) : while ($teams->have_posts()) : $teams->the_post();

        $img = ($teams->get_post_thumbnail_url()) ? $teams->get_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/no-member.png';
    ?>
        <div class="bearer-card">
          <div class="bearer-card__shape">
            <img src="<?php echo $img ?>" alt="<?php the_title() ?>" class="bearer-card__photo">
          </div>
          <div class="bearer-card__role"><?php echo get_field('designation')  ?></div>
          <div class="bearer-card__info">
            <h3 class="bearer-card__name"><?php the_title() ?></h3>

            <p>
              <?php echo get_the_content() ?>
            </p>
            <p class="bearer-card__contact">Contact : <?php echo get_field('email') ?></p>
          </div>
        </div>

    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>

  </div>
</div>


<?php get_footer(); ?>