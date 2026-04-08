<?php get_header(); ?>

<div class="main-container  container">
  <div class="imgs imgs-2">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
    <?php
    // Display additional gallery images if available
    $gallery = get_field('event_gallery');
    if ($gallery && is_array($gallery) && count($gallery) > 0) {
      foreach (array_slice($gallery, 0, 1) as $image) {
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