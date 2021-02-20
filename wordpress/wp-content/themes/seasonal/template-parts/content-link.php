<?php
/**
 * The template for displaying status post formats
 *
 * @package Seasonal
 * 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/Article">

    <header class="entry-header">
    
   <?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image")); ?>
     
     <?php the_title( '<h2 class="entry-title" itemprop="name">', '</h2>' );	?>
     
        <div class="category-list">      
            <?php 
			$format = get_post_format();
				if ( current_theme_supports( 'post-formats', $format ) ) {
					printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
					sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'seasonal' ) ),
					esc_url( get_post_format_link( $format ) ),
					get_post_format_string( $format )
				);
			}
	 		?>         
        </div>      

    </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
  </div><!-- .entry-content -->
  
</article><!-- #post-## -->

