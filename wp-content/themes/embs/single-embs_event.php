<?php get_header(); ?>

<div class="container single-embs " id="events-single-page">

  <?php
  $gallery = get_field('images');

  $valid_images = array_filter($gallery, function ($image) {
    return !empty($image['url']);
  });

  $image_count = count($valid_images);

  if ($image_count == 1) {
  $grid_class = 'single-image';
} elseif ($image_count >= 3) {
  $grid_class = 'three-column';
}

  ?>

  <div class="single-embs__images <?php echo $grid_class; ?>">

    <?php
    if (!empty($valid_images)) {
      foreach ($valid_images as $image) {
        echo '<img class="single-embs__event-img" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
      }
    }
    ?>

  </div>

  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      the_content();
    endwhile;
  endif;
  ?>

</div>

<?php get_footer(); ?>