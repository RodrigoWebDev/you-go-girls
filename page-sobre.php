<?php get_header();?>
<div class="sobre-hero">
    <div class="container">
       <div class="sobre-title">
          <h1><?php the_title();?></h1>
       </div>
       <div class="vertical-line-container">
           <div class="vertical-line"></div>
       </div>
       <div class="sobre-desc">
           <?php 
            if(is_active_sidebar("sobre-descricao")){
                dynamic_sidebar("sobre-descricao");
            }
           ?>
       </div>
    </div>
</div>

<div class="visual-title container">
    <div class="row">
        <div class="col-4 col-lg-5">
            <hr>
        </div>
        <div class="col-4 col-lg-2">
            <h2 class="h2-title" style="color:white">Girls</h2>
        </div>
        <div class="col-4 col-lg-5">
            <hr>
        </div>
    </div>
</div>

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


