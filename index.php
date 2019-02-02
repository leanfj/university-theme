<?php get_header(); ?>
<?php 
    while (have_posts()) {
        # code...
        the_post();?>
        
        <h2><a href="<?php permalink_link(  ); ?>"><?php the_title( ); ?></a></h2>
        <?php the_content( ); ?>
        <?php
    }
?>

<?php get_footer(); ?>