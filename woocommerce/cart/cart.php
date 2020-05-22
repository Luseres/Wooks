<?php

defined('ABSPATH') || exit;
do_action('woocommerce_before_cart');

global $woocommerce;
$items = $woocommerce->cart->get_cart();
?>

<section class="cart">
    <div class="scart__items">
        <a class="scart__items__return" href="<?= get_site_url() ?>/subscriptions">
            <p>&lt; Return to subscriptions</p>
        </a>
        <h2 class="scart__items__general__name wooks__title">Your Shoppingcart</h2>
        <hr class="wooks__line">
        <p class="scart__items__amount"><?= $woocommerce->cart->cart_contents_count ?> Items in your cart</p>
        <div class="scart__items__list">
            <?php
            foreach ($items as $cart_item_key => $cart_item) {
            ?>
                <div class="product__subscription fadein-slideup">
                    <a href="<?= wc_get_cart_remove_url($cart_item_key) ?>">
                        <div class="remove__item"><img src="<?php echo THEME_URL; ?>/resources/images/icons/cross_white.svg" alt="Remove item"></div>
                    </a>
                    <li class="product type-product post-35 status-publish first instock product_cat-uncategorized has-post-thumbnail sale sold-individually taxable shipping-taxable purchasable product-type-simple">
                        <a href="<?= the_permalink($cart_item['data']->id) ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <img src="<?= wp_get_attachment_image_src($cart_item['data']->image_id, 'full')[0] ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?= $cart_item['data']->name ?>">
                            <h2 class="woocommerce-loop-product__title"><?= $cart_item['data']->name ?></h2>
                            <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span><?= $cart_item['data']->regular_price ?></span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span><?= $cart_item['data']->sale_price ?></span></ins></span>
                        </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="scart__total">
        <p class="wooks__subtitle scart__total__title">Cart total</p>
        <table>
            <tr>
                <td class="prefix">Subtotal</td>
                <td class="price">€<?= $woocommerce->cart->subtotal ?>-</td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td class="prefix">Shipping</td>
                <td class="price">Flat rate: €6.75-</td>
            </tr>
            <td>
                <hr>
            </td>
            <td>
                <hr>
            </td>
            <tr>
                <td class="prefix">Total</td>
                <td class="price">€<?= $woocommerce->cart->total ?>-</td>
            </tr>
        </table>
        <a href="<?= get_site_url() ?>/checkout"><button class="wooks__button wooks__button--cta">Proceed to checkout</button></a>
    </div>
</section>

<?php
do_action('woocommerce_after_cart');
?>