<?php get_header();?>


<aside class="sidebar">
    <div class="container">
        <?php get_search_form();?>
        <?php get_sidebar(); ?>
    </div>
</aside>

<section class="blog-posts">
    <div class="container">
        <?php 
            $blog = new WP_Query(array(
                'type' => 'post',
                'category__not_in' => 3,
            ));
        
            if($blog->have_posts()):
                while($blog->have_posts()):
                    $blog->the_post();
                    get_template_part("blog","post");
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    </div>
</section>
<h1>TESTE DE FORÇA</h1>

<?php get_footer(); ?>
