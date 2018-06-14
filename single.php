<?php get_header();?>


<section class="single-post">
   <div class="container">
    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                get_template_part("single","post");
            }
        }
    ?>
    </div>
</section>

<?php get_footer(); ?>
