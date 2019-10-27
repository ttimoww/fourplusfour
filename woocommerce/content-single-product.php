<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="breadcrumbs">
	<?php woocommerce_breadcrumb(); ?>
</div>
<div class="product" id="product-<?php the_ID(); ?>">

	<div class="product__container">
		<div class="product__images">
			<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
			<?php 
				$attachment_ids = $product->get_gallery_attachment_ids();
				foreach( $attachment_ids as $attachment_id ){ ?>
					<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" alt="">
				<?php } ?>
		</div>

		<div class="product__name-small">
			<div class="product__name-small__container">

				<p class="name"><?php echo $product->get_name(); ?></p>
			
				<p class="price">€ <?php echo $product->get_price(); ?></p>

			</div>
		</div>

		<div class="product__info-medium">
			<div class="name">
				<h1><?php echo $product->get_name(); ?></h1>
			</div>
			<div class="price">
				<p>€  
					<?php 
						echo $product->get_variation_price();
						if ($product->get_variation_price() < $product->get_variation_price('max')) 
							echo ' - ' . $product->get_variation_price('max') 
					?>
				</p>

			</div>

				<?php echo woocommerce_variable_add_to_cart(); ?>

				<div class="product__info-medium__meta">
					<?php global $product; 
						$attributes = $product->get_attributes();
						if ( ! $attributes ) {
							echo "Geen extra details";
						}

						foreach ( $attributes as $attribute ) {
							if ($attribute['name'] == 'Details'){
								
								$product_attributes = array();
								$product_attributes = explode('|',$attribute['value']);
								$attributes_dropdown = '<ul>';

								foreach ( $product_attributes as $pa ) {
									$attributes_dropdown .= '<li>' . $pa . '</li>';
								}

								$attributes_dropdown .= '</ul>';
								echo $attributes_dropdown;
							} 
						} 
					?>
			</div>
		</div>

		

		<div class="product__info-small">
			
			<div class="product__info-small__cart" id="cart">
				<?php echo woocommerce_variable_add_to_cart(); ?>
			</div>

			<div class="product__info-small__meta">
			<?php global $product; 
				$attributes = $product->get_attributes();
				if ( ! $attributes ) {
					echo "Geen extra details";
				}

				foreach ( $attributes as $attribute ) {
					if ($attribute['name'] == 'Details'){
						
						$product_attributes = array();
						$product_attributes = explode('|',$attribute['value']);
						$attributes_dropdown = '<ul>';

						foreach ( $product_attributes as $pa ) {
							$attributes_dropdown .= '<li>' . $pa . '</li>';
						}

						$attributes_dropdown .= '</ul>';
						echo $attributes_dropdown;
					} 
				} 
			?>
			</div>
		</div>
	</div>
</div>


<?php do_action( 'woocommerce_after_single_product' ); ?>
