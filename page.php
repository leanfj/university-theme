<?php 
    while (have_posts()) {
        # code...
        the_post();?>
        
        <h2><?php the_title( ); ?></h2>
        <?php the_content( ); ?>
        <?php
    }
?>