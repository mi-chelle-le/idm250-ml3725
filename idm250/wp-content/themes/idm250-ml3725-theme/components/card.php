<div class="card-container">
    <div class="blog-info">
        <div class="blog-img-container">
            <?php
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if ($featured_image_url) {
                echo '<img class="blog-img" src="' . esc_url($featured_image_url) . '" alt="' . get_the_title() . '">';
            }
            ?>
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
        <h3 class="blog-title"><?php the_title(); ?></h3>
        <p class="blog-excerpt"><?php echo get_the_excerpt(); ?></p>
        <button class="read-btn" onclick="window.location.href='<?php the_permalink(); ?>'">Read</button> 
    </div>
</div>