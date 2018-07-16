<footer>
   <div class="container">
      <?php 
        if(is_active_sidebar("footer")){
            dynamic_sidebar("footer");
        }
       ?>
   </div>
    
</footer>
<?php wp_footer();?>
</body>

</html>
