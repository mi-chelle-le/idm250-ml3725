<div class="jewelry-card">
    <div class="jewelry-info">
        <h4 class="jewelry-title"><?php the_title(); ?></h4>
        <p class="jewelry-excerpt"><?php echo get_the_excerpt(); ?></p>
            <?php
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if ($featured_image_url) {
                echo '<img class="jewelry-img" src="' . esc_url($featured_image_url) . '" alt="' . get_the_title() . '">';
            }
            ?>
    </div>
</div>