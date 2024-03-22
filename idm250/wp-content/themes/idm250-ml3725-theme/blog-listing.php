<?php
/* Template Name: Blog Listing */
get_header();
?>

<div class="content">
    <h1>
        <?php echo get_the_title(); ?>
    </h1>
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
            <?php
            $query = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC',
                'paged' => $paged,
                'cat' => '-' . get_cat_ID('uncategorized')
            ]);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    get_template_part('components/card');
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <?php
        echo paginate_links([
            'total' => $query->max_num_pages,
            'prev_text' => __('Prev'),
            'next_text' => __('Next'),
        ]);
        ?>
    </div>
</div>

<?php get_footer(); ?>