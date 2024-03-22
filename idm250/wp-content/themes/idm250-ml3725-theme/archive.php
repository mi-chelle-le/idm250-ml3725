<?php get_header(); ?>
<div class="content">
    <h1>Blog</h1>
<div class="category-filter">
<p>Sort by:</p>
<a href="<?php echo esc_url(home_url('/blog')); ?>" class="category-button button-all-posts">All Posts</a>
<?php
$categories = get_categories(array(
    'exclude' => get_cat_ID('uncategorized')
));

foreach ($categories as $category) {
    $category_link = get_category_link($category->term_id);
    $custom_class = 'button-' . sanitize_title($category->name);
    echo '<a href="' . esc_url($category_link) . '" class="category-button ' . esc_attr($custom_class) . '">' . esc_html($category->name) . '</a>';
}
?>
</div>
<div class="archive-container-div">
    <div class="archive-container">


  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();
            get_template_part('components/card');
        endwhile; ?>
  <?php else: ?>
  <p>No content found</p>
  <?php endif; ?>

  </div>
</div>
  </div>

<?php get_footer(); ?>