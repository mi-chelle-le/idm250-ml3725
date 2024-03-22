<div class="review-card">
    <div class="review-info">
        <h4 class="review-title"><?php the_title(); ?></h4>
        <p class="review-date"><?php echo get_the_date(); ?></p>
        <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        </div>
        <p class="review-excerpt"><?php echo get_the_excerpt(); ?></p>
    </div>
</div>