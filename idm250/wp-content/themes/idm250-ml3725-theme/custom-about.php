<?php
/* Template Name: Custom About Page */
get_header();
?>

<div class="content">
    <h1>
        <?php echo get_the_title(); ?>
    </h1>
    <?php
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
echo '<img class="single-blog-img" src="' . esc_url($featured_image_url) . '" alt="' . get_the_title() . '">';

echo '<p class="post-excerpt">' . get_the_excerpt() . '</p>';
?>

    <?php
    echo get_the_content();
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
        'post_type' => 'review',
        'posts_per_page' => 3,
        'paged' => $paged,
    ];

// Create a new WP_Query instance
$review_query = new WP_Query($args);
?>

<div class="review-container-div">
  <div class="review-container">

      <?php if ($review_query->have_posts()):
          while ($review_query->have_posts()) : $review_query->the_post();
              get_template_part('components/review-card');
          endwhile; ?>

      <?php else : ?>
      <p>No reviews found.</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

  </div>
</div>
</div>
<?php get_footer(); ?>