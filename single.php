<?php get_header();?>
<article class="single">
   <div class="container">
       <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                }
            }
       ?> 
       <div class="single__header">
           <h1><?php the_title();?></h1>
           <hr>
       </div>   
       <div class="single__thumb">
           <?php the_post_thumbnail();?>
       </div>
       <div class="single__content">
           <?php the_content();?>
       </div>
       
   </div>
</article>
<?php get_footer(); ?>
