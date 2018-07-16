<?php get_header();?>
<div class="visual-title visual-title-pages visual-title-pages--blog">
    <div class="container">
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
</div>
<div class="container blog-posts">
    <div class="row">
        <div class="col-md-8">
            <section class="blog-posts">
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
            </section>
        </div>
        <div class="col-md-4">
            <aside class="sidebar sidebar-blog">
                <?php get_search_form();?>
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</div>
<?php get_footer(); ?>
