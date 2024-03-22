<?php get_header(); ?>

<div class="content">
  <div>
<button class="back-button" onclick="window.history.back()"><i class="fa-solid fa-arrow-left-long"></i> Back to Blog</button>
</div>
<?php
$categories = get_the_category();
  if ($categories) {
      foreach ($categories as $category) {
          $category_class = 'category-' . sanitize_title($category->name); 
          echo '<p class="blog-category-title ' . esc_attr($category_class) . '">' . esc_html($category->name) . '</p>';
      }
  }
?>
<h1>
  <?php echo get_the_title(); ?>
</h1>
<p class="post-date">
  <?php echo get_the_date(); ?>
</p>
<?php
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
echo '<img class="single-blog-img" src="' . esc_url($featured_image_url) . '" alt="' . get_the_title() . '">';

echo '<p class="post-excerpt">' . get_the_excerpt() . '</p>';
?>

  <?php
    echo get_the_content();
  ?>
  <?php get_template_part('components/related-posts'); ?>
</div>
<?php get_footer(); ?>