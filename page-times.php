<?php get_header();?>
<div class="visual-title visual-title-pages visual-title-pages--times">
    <div class="container">
        <div class="row">
            <div class="col-4 col-lg-5">
                <hr>
            </div>
            <div class="col-4 col-lg-2">
                <h2 class="h2-title"><?php the_title()?></h2>
            </div>
            <div class="col-4 col-lg-5">
                <hr>
            </div>
        </div>
    </div>
</div>
<div class="container times">
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
