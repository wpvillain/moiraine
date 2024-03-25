<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
 * body_class filter
 * @link https://developer.wordpress.org/reference/functions/add_filter/
 * @link https://developer.wordpress.org/reference/hooks/body_class/
 */
add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'bg-white text-gray-600 work-sans leading-normal text-base tracking-normal' ) );
});


/**
 * render_block filter for product collection 'woocommerce/product-image' block
 * @link https://developer.wordpress.org/reference/functions/add_filter/
 * @link https://developer.wordpress.org/reference/hooks/render_block/
 */
add_filter('render_block', function ($block_content, $block) {
    if (is_front_page() && strpos($block_content, 'wc-block-grid__product-image') !== false) {
        // Simple string replacement
        if ($block['blockName'] === 'woocommerce/product-image') {
            $block_content = str_replace('wc-block-grid__product-image', 'wc-block-grid__product-image hover:grow hover:shadow-lg', $block_content);
        }
    }
    if ('woocommerce/product-image' === $block['blockName'] &&
        !empty($block['attrs']['className']) &&
        preg_match('/\bwc-block-grid__product-image\b/', $block['attrs']['className'])) {
        $block_content = 'wc-block-grid__product-image hover:grow hover:shadow-lg';
    }

    // Print to console
    // echo '<script>console.dir(' . json_encode($block) . ')</script>';

    // Returns altered $block_content to be rendered
    return $block_content;
}, 10, 2);

/**
 * WooCommerce filter for product gallery to turn off image clicking
 * @link https://woocommerce.github.io/code-reference/files/woocommerce-templates-single-product-product-thumbnails.html
 */
add_filter( 'woocommerce_single_product_image_thumbnail_html', function ($html, $post_id) {
return preg_replace("!<(a|/a).*?>!", '', $html);
}, 10, 2);