<?php

defined('ABSPATH') || exit;
do_action('woocommerce_before_cart');

global $woocommerce;
$items = $woocommerce->cart->get_cart();

foreach ($items as $item) {
    $product = wc_get_product($item['data']->get_id());
}
?>

<main class="scart">
    <section>
        <div class="scart__items">
            <a class="scart__items__return" href="/subscriptions">
                <p>&lt; Return to subscriptions</p>
            </a>
            <h2 class="scart__items__general__name wooks__title">Your Shoppingcart</h2>
            <hr>
            <p>4 Items in your cart</p>

        </div>
        <div class="scart__total">
            <p class="wooks__subtitle">Cart total</p>
        </div>
    </section>
</main>

<?php
do_action('woocommerce_after_cart');
?>