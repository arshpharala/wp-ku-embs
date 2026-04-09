<?php get_header(); ?>

<div class="main-container  container" id="events-single-page">
  <div class="imgs imgs-2">
    <?php
    $gallery = get_field('images');

    if (is_array($gallery)) {
      foreach ($gallery as $image) {
        if (empty($image['url'])) {
          continue;
        }
        echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
      }
    }
    ?>
  </div>

  <?php
  if (have_posts()) : while (have_posts()) : the_post();
  ?>
      <?php the_content(); ?>

  <?php endwhile;
  endif;  ?>
</div>

<?php get_footer(); ?>