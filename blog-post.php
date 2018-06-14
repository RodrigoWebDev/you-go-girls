<article class="post">
    <h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
    <p>por <?php the_author();?></p>
    <p>em <?php echo get_the_date(); ?></p>
    <p><?php the_tags(); ?></p>
    <p><?php the_category(); ?></p>
    <p><?php the_excerpt();?></p>
</article>
