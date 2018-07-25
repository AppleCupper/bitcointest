<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
include(dirname(dirname(dirname(__FILE__)))."/options/data_cache.php"); 

global $product, $woocommerce_loop;
$id =get_the_ID(); 
if ( ! $upsells = $product->get_upsell_ids() ) {
	return;
}

$args = array(
	'post_type'           => 'product',
	'ignore_sticky_posts' => 1,
	'no_found_rows'       => 1,
	'posts_per_page'      => 4,
	'orderby'             => 'rand',
	'post__in'            => $upsells,
	'post__not_in'        => array($id),
	'meta_query'          => WC()->query->get_meta_query()
);

$products                    = new WP_Query( $args );
$woocommerce_loop['name']    = 'up-sells';
$woocommerce_loop['columns'] = apply_filters( 'woocommerce_up_sells_columns', $columns );

if ( $products->have_posts() ) : ?>

	<div class="related products">

		<h2 class="related_h2"><span><?php echo $product_l0; ?></span></h2>

		<div class="caseshow">
<ul>

			<?php while ( $products->have_posts() ) : $products->the_post();
			shopshow_loop('','strong','');
			
			 endwhile; // end of the loop. ?>

	</ul>
	</div>

	</div>
    
 

<?php endif;

wp_reset_postdata();