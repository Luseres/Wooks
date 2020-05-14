<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header('shop');
do_action('woocommerce_before_main_content');
?>
<?php while (have_posts()) : ?>
    <?php the_post();
    $product = wc_get_product();
    //$product->name
    //$product->regular_price
    //$product->sale_price
    //$product->description
    //$product->image_id
    ?>
    <div class="product">
        <p><?= $product->name ?></p>
        <p><?= $product->regular_price ?></p>
        <p><?= $product->sale_price ?></p>
        <p><?= $product->description ?></p>
        <p><?= $product->image_id ?></p>
    </div>
<?php endwhile;
do_action('woocommerce_after_main_content');
get_footer('shop');
