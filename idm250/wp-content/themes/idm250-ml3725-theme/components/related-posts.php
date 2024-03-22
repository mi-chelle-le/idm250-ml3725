<?php
// Query terms for the current post and return an array of term IDs
$categoryIds = wp_get_post_terms(get_the_ID(), 'category', ['fields' => 'ids']);

// Custom WP query to get related posts for the current category
$related_posts = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 2,
    'post__not_in' => [get_the_ID()],
    'tax_query' => [
        [
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $categoryIds,
        ],
    ],
]);

if ($related_posts->have_posts()) : ?>
<h2>Related Articles</h2>
<div class="archive-container-div">
    <div class="archive-container">
      <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
      <?php get_template_part('components/card'); ?>
      <?php endwhile; ?>
    </div>
</div>
<?php endif;
wp_reset_postdata(); ?>