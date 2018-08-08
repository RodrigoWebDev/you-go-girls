<?php get_header();?>
<div class="visual-title visual-title-pages visual-title-pages--csgo">
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
<div class="container campeonatos">
    <div class="row">
        <div class="col-md-8">
            <?php echo do_shortcode('[table id=2 /]');?>
            <?php echo do_shortcode('[table id=2 /]');?>
        </div>
        <div class="col-md-4">
            <aside class="sidebar">
                <?php echo do_shortcode('[table id=1 /]');?>
            </aside>
        </div>
    </div>
</div>
<?php get_footer(); ?>
