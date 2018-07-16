<div class="autor">
    <div class="autor__img">
        <?php the_post_thumbnail()?>
    </div>
    <div class="autor__content">
        <div class="autor__title">
            <h2><?php the_title(); ?></h2>
        </div>
        <p><?php the_content(); ?></p>
    </div>
</div>
<hr>