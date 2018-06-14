<?php get_header();?>

<aside class="sidebar">
    <div class="container">
        <?php get_search_form();?>
        <?php get_sidebar();?>
    </div>
</aside>

<section class="blog-posts">
    <div class="container">
        <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                get_template_part("blog","post");
            }
        }
    ?>
    </div>
</section>



<?php get_footer(); ?>
