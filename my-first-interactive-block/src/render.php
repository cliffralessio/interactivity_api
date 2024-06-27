<?php

/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

// Generate unique id for aria-controls.
$unique_id = wp_unique_id('p-');
?>

<div <?php echo get_block_wrapper_attributes(); ?> data-wp-interactive="create-block/my-first-interactive-block" data-wp-context='{
    "a": 0,
    "b": 0,
    "c": 0
}'>
    <div class='simple-calculator'>
        <div class='simple-calculator__box'>
            <h2><?= __('Simple Calculator', 'simple-calculator') ?></h2>
            <div class='simple-calculator__inner-box'>
                <p class='simple-calculator__label'><?= __('A', 'simple-calculator') ?></p>
                <input type="number" placeholder="<?= __('Enter a number...', 'simple-calculator') ?>" data-wp-on-keyup="actions.a">
            </div>
            <div class='simple-calculator__inner-box'>
                <p class='simple-calculator__label'><?= __('B', 'simple-calculator') ?></p>
                <input type="number" placeholder="<?= __('Enter a number...', 'simple-calculator') ?>" data-wp-on-keyup="actions.b">
            </div>
        </div>
        <div class='simple-calculator__result-container'>
            <h2><?= __('Result:', 'simple-calculator') ?></h2>
            <div class='simple-calculator__inner-box'>
                <p class='simple-calculator__output' data-wp-text="context.c"></p>
            </div>
        </div>
    </div>
</div>
