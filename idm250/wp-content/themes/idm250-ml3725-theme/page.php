<?php /* Template Name: Default Template */?>
<?php get_header(); ?>
<div class="content default">
    <h1>
        <?php echo get_the_title(); ?>
    </h1>
    <?php
    if (has_post_thumbnail()) {
        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
        echo '<img class="single-blog-img" src="' . esc_url($featured_image_url) . '" alt="' . get_the_title() . '">';
    }
    ?>
    <?php
    echo get_the_content();
    ?>
</div>

<?php get_footer(); ?>
