<?php
add_filter( 'woocommerce_enqueue_styles', 'stonedthemes_dequeue_styles' );
function stonedthemes_dequeue_styles( $enqueue_styles ) {
	//unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

function stonedthemes_initSetup(){
	remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
	add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 5 );

	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
	add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 20 );

	remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
	add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_title', 20 );

	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
	add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 10 );

	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 20 );

	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
	add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 30 );

	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
	add_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 20 );

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	add_action( 'woocommerce_after_single_product', 'woocommerce_output_product_data_tabs', 10 );

	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 1 );

	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 15 );

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
	add_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products', 20 );

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	add_action( 'woocommerce_after_single_product', 'woocommerce_upsell_display', 20 );

	$catalog = array(
		'width' 	=> '472',
		'height'	=> '664',
		'crop'		=> 1
	);

	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog );

}
add_action('init','stonedthemes_initSetup');

add_action('woocommerce_before_shop_loop_item', 'stonedthemes_before_shop_loop_item');
function stonedthemes_before_shop_loop_item() {
	echo '<div class="overlay-container"><div class="overlay"></div>';
}

add_action('woocommerce_after_shop_loop_item', 'stonedthemes_after_shop_loop_item');
function stonedthemes_after_shop_loop_item() {
	echo '</div>';
}

add_action('woocommerce_shop_loop_item_title', 'stonedthemes_shop_loop_item_title');
function stonedthemes_shop_loop_item_title() {
	echo '<div class="shop-item-meta">';
}

add_action('woocommerce_after_shop_loop_item_title', 'stonedthemes_after_shop_loop_item_title');
function stonedthemes_after_shop_loop_item_title() {
	echo '</div>';
}

add_filter('woocommerce_product_get_rating_html', 'stonedthemes_rating_markup');
function stonedthemes_rating_markup( $variable ) {
	return '<div class="star-rating-wrapper">' . $variable . '</div>';
}

add_action('woocommerce_before_checkout_billing_form', 'stonedthemes_before_checkout_billing_form');
function stonedthemes_before_checkout_billing_form() {
	echo '<div class="billing-container"><div class="billing">';
}

add_action('woocommerce_after_checkout_billing_form', 'stonedthemes_after_checkout_billing_form');
function stonedthemes_after_checkout_billing_form() {
	echo '</div></div>';
}



// single product layout hooks
add_action('woocommerce_before_single_product', 'stonedthemes_before_single_product');
function stonedthemes_before_single_product() {
}

add_action('woocommerce_before_single_product_summary', 'stonedthemes_before_single_product_summary', 1);
function stonedthemes_before_single_product_summary() {
	echo '<div class="row"><div class="col-sm-6 col-md-6 col-lg-8">';
}

add_action('woocommerce_before_single_product_summary', 'stonedthemes_before_single_product_summary_end', 100);
function stonedthemes_before_single_product_summary_end() {
	echo "</div>";
	echo '<div class="col-sm-6 col-md-6 col-lg-4">';
}

add_action('woocommerce_after_single_product_summary', 'stonedthemes_after_single_product_summary');
function stonedthemes_after_single_product_summary() {
	echo '</div></div>';
}

add_action('woocommerce_after_single_product', 'stonedthemes_after_single_product');
function stonedthemes_after_single_product() {
	// echo '</div>';
}

// add_filter('woocommerce_single_product_image_thumbnail_html', 'stonedthemes_single_product_image_thumbnail_html');
// function stonedthemes_single_product_image_thumbnail_html( $variable ) {
// 	return '<div>' . $variable . '</div>';
// }

add_filter('woocommerce_single_product_image_html', 'stonedthemes_single_product_image_html');
function stonedthemes_single_product_image_html( $variable ) {
	return '<div class="rsContent">' . $variable . '</div>';
}

add_filter('woocommerce_show_page_title', 'stonedthemes_show_page_title');
function stonedthemes_show_page_title( $variable ) {
	return '<div class="row"><div class="col-md-4">' . $variable . '</div>';
}

add_filter( 'woocommerce_add_to_cart_fragments', 'stonedthemes_woocommerce_header_add_to_cart_fragment' );

function stonedthemes_woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<div class="minicart pull-right">
		<ul class="list-unstyled">
			<li><a href="<?php echo WC()->cart->get_cart_url(); ?>" class="cart-info"><span><?php echo WC()->cart->get_cart_total(); ?></span> - <?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(),'collective' ), WC()->cart->get_cart_contents_count() ); ?></a></li>
			<li><a href="<?php echo wp_login_url(); ?>" class="sign">Sign In</a></li>
		</ul>
		<div class="minicart-container">
			<a href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php esc_html_e( 'View your shopping cart' ,'collective'); ?>" class="cart-button">
				<i class="fa fa-shopping-cart"></i>
				<span class="notification"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
			</a>
			<div class="minicart-items">
				<?php st_mini_cart();?>
			</div>
		</div>
	</div>
	<?php
	
	$fragments['div.minicart'] = ob_get_clean();
	
	return $fragments;
}


function st_mini_cart(){
	?>
	<ul class="cart_list product_list_widget">

	<?php if ( ! WC()->cart->is_empty() ) : ?>

		<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
					$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
					$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<li class="<?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
						<?php
						echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
							'<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
							esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
							esc_html__( 'Remove this item', 'collective' ),
							esc_attr( $product_id ),
							esc_attr( $_product->get_sku() )
						), $cart_item_key );
						?>
						<?php if ( ! $_product->is_visible() ) : ?>
							<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . $product_name . '&nbsp;'; ?>
						<?php else : ?>
							<a href="<?php echo esc_url( $product_permalink ); ?>">
								<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . $product_name . '&nbsp;'; ?>
							</a>
						<?php endif; ?>
						<?php echo WC()->cart->get_item_data( $cart_item ); ?>

						<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
					</li>
					<?php
				}
			}
		?>

	<?php else : ?>

		<li class="empty"><?php esc_html_e( 'No products in the cart.', 'collective' ); ?></li>

	<?php endif; ?>

</ul><!-- end product list -->

<?php if ( ! WC()->cart->is_empty() ) : ?>

	<p class="total"><strong><?php esc_html_e( 'Subtotal', 'collective' ); ?>:</strong> <?php echo WC()->cart->get_cart_subtotal(); ?></p>

	<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

	<p class="buttons">
		<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="button wc-forward"><?php esc_html_e( 'View Cart', 'collective' ); ?></a>
		<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="button checkout wc-forward"><?php esc_html_e( 'Checkout', 'collective' ); ?></a>
	</p>

<?php endif; 

}

add_filter( 'woocommerce_output_related_products_args', 'stonedthemes_related_products_args' );
 function stonedthemes_related_products_args( $args ) {
 	$related_product = 3;
 	if(function_exists('get_field')){
 			$related_product = get_field('related_products_count','options')? get_field('related_products_count','options'):3;
 	}
 	
	$args['posts_per_page'] = $related_product; // 4 related products
	$args['columns'] = 2; // arranged in 2 columns
	return $args;
}