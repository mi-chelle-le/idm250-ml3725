<?php /* Template Name: Default Template */?>

<?php get_header(); ?>
<div class="body-container">
<h1>
  <?php echo get_the_title(); ?>, Heading 1
</h1>
<!-- <p>This is a page.php template</p> -->
<div class="content default">
  <?php
    echo get_the_content();
  ?>
</div>
</div>
<?php get_footer(); ?>