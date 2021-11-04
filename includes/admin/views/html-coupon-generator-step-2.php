<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Coupon generator step 2
 *
 * In this step the generation options of the coupon are shown.
 *
 * @author		Jeroen Sormani
 * @package		WooCommerce Coupon Generator
 * @version		1.0.0
 */

?>	<div class='wc-coupon-generator-wrap wc-coupon-generator-wrap-step-2 hidden'>
		<div class='wc-coupon-generator-coupon-data' id='poststuff'>

			<div id="postbox-container-0" class="postbox-container">
				<div id="normal-sortables" class="meta-box-sortables ui-sortable">
					<div id="woocommerce-coupon-generator-options" class="postbox ">
						<h3 class="hndle ui-sortable-handle"><span><?php _e( 'Generator options', 'coupon-generator-for-woocommerce' ); ?></span></h3>
						<div class="inside">

							<div id="coupon_options" class="panel-wrap">
								<div class="panel woocommerce_options_panel" style="display: block;">

									<?php wp_nonce_field( 'wccg_generate_coupons', 'generate_coupons_nonce' ); ?>
									<p class="form-field coupon_code_prefix ">
										<label for="coupon_code_prefix"><?php _e( 'Coupon Code Prefix', 'coupon-generator-for-woocommerce' ); ?></label>
										<input type="text" autofocus class="short" style="width: 200px;" name="coupon_code_prefix" id="coupon_code_prefix" placeholder="bkout">
									</p>
									<p class="form-field coupon_code_suffix ">
										<label for="coupon_code_suffix"><?php _e( 'Coupon Code Suffix', 'coupon-generator-for-woocommerce' ); ?></label>
										<input type="text" autofocus class="short" style="width: 200px;" name="coupon_code_suffix" id="coupon_code_suffix" placeholder="plat">
									</p>
									<p class="form-field coupon_code_separator ">
										<label for="coupon_code_separator"><?php _e( 'Coupon Code Separator', 'coupon-generator-for-woocommerce' ); ?></label>
										<input type="text" autofocus class="short" style="width: 200px;" name="coupon_code_separator" id="coupon_code_separator" placeholder="any special character">
									</p>
									<p class="form-field coupon_code_character_limit ">
										<label for="coupon_code_character_limit"><?php _e( 'Coupon Code Character Limit', 'coupon-generator-for-woocommerce' ); ?></label>
										<input type="number" min="1" class="short" style="width: 200px;" name="coupon_code_character_limit" id="coupon_code_character_limit" min="1" max="16" value="1" placeholder="10">
										<img class="help_tip" data-tip='<?php _e( 'Coupon code character limit', 'coupon-generator-for-woocommerce' ); ?>' src="<?php echo WC()->plugin_url(); ?>/assets/images/help.png" height="16" width="16" />
									</p>
									<p class="form-field number_of_coupons ">
										<label for="number_of_coupons"><?php _e( 'Number of coupons', 'coupon-generator-for-woocommerce' ); ?></label>
										<input type="number" min="1" class="short" style="width: 200px;" name="number_of_coupons" id="coupon_quantity" value="1" placeholder="10">
										<img class="help_tip" data-tip='<?php _e( 'Number of coupons to generate in this batch', 'coupon-generator-for-woocommerce' ); ?>' src="<?php echo WC()->plugin_url(); ?>/assets/images/help.png" height="16" width="16" />
									</p>

									<?php do_action( 'woocommerce_coupon_generator_coupon_options' ); ?>

								</div><!-- .woocommerce_options_panel -->
								<div class="clear"></div>
							</div><!-- #coupon_options -->

						</div><!-- .inside -->
					</div>
				</div>
			</div>

		</div>

		<div class="continue-button-wrap">
			<a href="javascript:void(0);"  class="wccg-next wccg-start"><?php _e( 'Continue to the next step', 'coupon-generator-for-woocommerce' ); ?></a>
		</div>
	</div>
