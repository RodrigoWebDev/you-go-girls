<article class="post">
    <h1><?php the_title();?></h1>
    <p>por <?php the_author();?></p>
    <p>em <?php echo get_the_date(); ?></p>
    <p><?php the_tags(); ?></p>
    <p><?php the_category(); ?></p>
    <p><?php the_content();?></p>
</article>