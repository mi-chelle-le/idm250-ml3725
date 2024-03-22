<?php /* Template Name: Custom Booking Page */?>

<?php get_header(); ?>
<div class="content default">
<h1>
  <?php echo get_the_title(); ?>
</h1>
  <?php
    echo get_the_content();
  ?>
  <div class="booking-input-div">
    <?php
  get_template_part('components/booking-form');
  ?>
</div>
</div>
<?php get_footer(); ?>