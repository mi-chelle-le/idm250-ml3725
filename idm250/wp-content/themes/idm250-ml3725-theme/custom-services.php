<?php
/* Template Name: Custom Services Page */
get_header();
?>

<div class="content">
    <h1>
        <?php echo get_the_title(); ?>
    </h1>

    <?php
    echo get_the_content();
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
        'post_type' => 'jewelry',
        'posts_per_page' => 4,
        'paged' => $paged,
    ];

// Create a new WP_Query instance
$jewelry_query = new WP_Query($args);
?>

<div class="jewelry-container-div">
  <div class="jewelry-container">

      <?php if ($jewelry_query->have_posts()):
          while ($jewelry_query->have_posts()) : $jewelry_query->the_post();
              get_template_part('components/jewelry-card');
          endwhile; ?>

      <?php else : ?>
      <p>No jewelry found.</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

  </div>
</div>
</div>
<?php get_footer(); ?>