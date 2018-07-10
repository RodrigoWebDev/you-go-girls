<article class="post">
   <div class="row">
       <div class="col-md-6">
           <a class="hvr-bounce-to-top hvr-bounce-to-top--black" href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
       </div>
       <div class="col-md-6">
            <h2><a href="<?php the_permalink()?>"><?php the_title() ;?></a></h2>
            <p><?php the_excerpt(); ?></p>
            <span class="date">em <?php echo get_the_date(); ?></span>
       </div>
   </div>
    
</article>
<hr>
