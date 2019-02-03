<?php 
    get_header(  );
    while (have_posts()) {
        # code...
        the_post();?>
        
        <div class="page-banner">
          <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/ocean.jpg' ); ?>);"></div>
          <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <div class="page-banner__intro">
              <p>LEMBRE DE ME EDITAR DEPOIS</p>
            </div>
          </div>  
        </div>
        <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
          <p><a class="metabox__blog-home-link" href="<?php echo site_url( '/index.php/blog',NULL ); ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a> <span class="metabox__main">Postagem feita por <?php the_author_posts_link(  ) ?> em <?php the_time( 'd/m/Y' ) ?> em <?php echo get_the_category_list( ', '); ?></span></p>
        </div>
        
        <div class="generic-content">

            <?php the_content( ); ?>
        </div>

        </div>
        <?php
    }

    get_footer(  );
?>