<?php get_header(); ?>
  <div class="content">
    <?php
    echo get_the_content();
    ?>
    <div class="archive-container-div">
        <div class="archive-container">
            <?php
            $query = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 2,
                'orderby' => 'date',
                'order' => 'DESC'
            ]);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    get_template_part('components/card');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
    <div class="wp-block-buttons"> 
        <div class="wp-block-button"> 
            <a href="<?php echo esc_url(home_url('/idm250/blog')); ?>" class="wp-block-button__link wp-element-button">More Articles</a>
        </div>
    </div>
  </div>
<?php get_footer(); ?>