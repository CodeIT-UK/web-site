<?php
/**
 * Entry Featured Image Markup
 *
 * @package Munk
 */

// entry card featured image
if( !function_exists('munk_entry_card_markup_image') ) :
	function munk_entry_card_markup_image() {			
?>

		<?php if ( has_post_thumbnail() ) { ?>
        <div class="img-holder">
            <?php the_post_thumbnail('munk-wide', array('class' => 'img-fluid featured-image')); ?>
        </div>    	
        <?php } ?>
        
<?php
}
endif;