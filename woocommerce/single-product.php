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
    ?>
    <section class="product fadein-slideup">
        <div class="product__general">
            <a class="product__return" href="/subscriptions">
                <p>&lt; Return to subscriptions</p>
            </a>
            <h2 class="product__general__name wooks__title"><?= $product->name ?></h2>
            <a data-fancybox="gallery" href="<?= wp_get_attachment_image_src($product->image_id, 'full')[0] ?>"><img src="<?= wp_get_attachment_image_src($product->image_id, 'full')[0] ?>" alt="<?= $product->name; ?>" class="product__general__image"></a>
        </div>
        <div class="product__info">
            <p class="product__info__name wooks__subtitle"><?= $product->name ?></p>
            <span class="product__info__price">
                <p class="product__info__price__value">€<?= $product->sale_price ?>-</p>
                <p class="product__info__price__value--sale">€<?= $product->regular_price ?>-</p>
            </span>
            <a class="product__info__button__link" href="?add-to-cart=<?= $product->id ?>"><button class="wooks__button wooks__button--cta">Add to cart</button></a>
            <p class="product__info__description">"<?= $product->description ?>"</p>
        </div>
    </section>
<?php endwhile;
do_action('woocommerce_after_main_content');
get_footer('shop');
