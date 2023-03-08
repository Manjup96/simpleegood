<?php
if ( ! function_exists( 'furnob_wishlist_icon' ) ) {
	function furnob_wishlist_icon(){
	?>

	<?php $wishlistheader = get_theme_mod('furnob_header_wishlist',0); ?>
	<?php if($wishlistheader == 1){ ?>

		<?php if ( function_exists( 'tinv_url_wishlist_default' ) ) { ?>
			<div class="header-button">
				<a href="<?php echo tinv_url_wishlist_default(); ?>" class="wishlist-button">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
				</a>
				<?php echo do_shortcode('[ti_wishlist_products_counter]'); ?>
			</div><!-- header-button -->
		<?php } ?>

	<?php } ?>
	
	<?php 
	
	}
}