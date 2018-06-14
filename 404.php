<?php get_header();?>
<div class="container">
<section>
    <h1>ERRO 404</h1>
</section>

<section class="blog-posts">
    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                get_template_part("blog","post");
            }
        }
    ?>
</section>
</div>



<?php get_footer(); ?>
