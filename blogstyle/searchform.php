<?php
/**
 * Template for displaying search forms in blogstyle
 *
 * @package blogstyle
 * 
 */
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="search-form">

  <input id="field" type="text" value="<?php the_search_query(); ?>" placeholder="<?php esc_attr_e( 'Search here', 'blogstyle' ); ?>" name="s" />  

</form>	 
