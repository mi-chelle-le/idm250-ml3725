<?php
/* Template Name: Page with Sidebar */
get_header();
?>

  <div class="content sidebar-page">
    <div>
    <h1>
        <?php echo get_the_title(); ?>
    </h1>
    <?php
    echo get_the_content();
    ?>
    </div>
    <div class="sidebar-container-div">
        <h3>Recent Articles</h3>
        <div class="sidebar-container">
            <?php
            $query = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 3,
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
  </div>
<?php get_footer(); ?>
