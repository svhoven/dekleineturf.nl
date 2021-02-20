<?php
/**
 * The template for displaying search forms 
 * @package Seasonal
 */
?>


<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><?php _e( 'Search for:',  'seasonal' ); ?></span>
		<div class="input-group">
      		<input type="text" class="form-control" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
              <span class="input-group-btn">
                <input class="btn" type="submit" value="<?php _e( 'Find', 'seasonal' ); ?>"></input>
              </span>
    	</div>
</form>    

