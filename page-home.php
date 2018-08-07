<?php get_header();?>
<section class="hero">
    <div class="container">
        <div class="hero__inner">
            <h1 class="title title--absolute">Support <br> your <br> sisters</h1>
        </div>

    </div>

</section>

<section class="home-news">
    <div class="container">
        <div class="visual-title">
            <div class="row">
                <div class="col-4 col-lg-5">
                    <hr>
                </div>
                <div class="col-4 col-lg-2">
                    <h2 class="h2-title">Notícias</h2>
                </div>
                <div class="col-4 col-lg-5">
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            <?php 
                $destaque = new WP_Query(array(
                    'type' => 'post',
                    'posts_per_page' => 1,
                    'category__not_in' => 3,
                ));
                
                if($destaque->have_posts()):
                    while($destaque->have_posts()):
                        $destaque->the_post();
            ?>
            <div class="col-md-8">
                <?php get_template_part("destaque"); ?>
            </div>
            <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                                                   
            ?>
                <div class="col-md-4">
                    <div>
                        <?php 
                        $destaque2 = new WP_Query(array(
                            'type' => 'post',
                            'posts_per_page' => 2,
                            'offset' => 1,
                            'category__not_in' => 3,
                        ));
                        
                        if($destaque2->have_posts()):
                            while($destaque2->have_posts()):
                                $destaque2->the_post();
                                get_template_part("destaque");
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                    </div>
                </div>
        </div>
        <hr>
    </div>

</section>

<div class="container home-posts">
    <div class="row">
        <div class="col-md-8">
            <?php 
            $blogPosts = new WP_Query(array(
                'type' => 'post',
                'post_per_page' => '4',
                'offset' => '3',
            ));
            if($blogPosts->have_posts()):
                while($blogPosts->have_posts()):
                    $blogPosts->the_post();
                    get_template_part("blog","post");
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
        </div>

        <div class="col-md-4">
            <aside class="sidebar">
                <?php get_search_form(); ?>
                <h2>Wpcupgirls</h2>
                <hr>
                <!-- Tabelas -->
                <?php the_content(); ?>
                <?php 
                    if(is_active_sidebar("destaque-do-mes")){
                        dynamic_sidebar("destaque-do-mes");
                    }
                ?>
            </aside>
        </div>
    </div>

</div>



<?php get_footer(); ?>
