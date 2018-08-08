<?php get_header();?>
<section class="autores">
    <div class="container">
        <?php 
            $sobre = new WP_Query("type=post&cat=3");

            if($sobre->have_posts()):
                while($sobre->have_posts()):
                    $sobre->the_post();
                    get_template_part("autores"); 
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>


