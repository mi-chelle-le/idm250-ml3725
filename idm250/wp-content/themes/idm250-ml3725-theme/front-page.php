<?php get_header(); ?>
<div class="body-container">
<h1 class="">
  <?php echo get_the_title(); ?>
</h1>
<div class="content">
  <?php
    echo get_the_content();
  ?>
</div>
<p>This is a front-page.php template</p>
</div>
<?php get_footer(); ?>