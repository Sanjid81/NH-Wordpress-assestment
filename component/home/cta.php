<?php
defined('ABSPATH') || exit;
$fields = isset($block_fields) ? $block_fields : [];
?>

<section class="consultation-section">
    <div class="consultation-content">
        <h2><?php echo wp_kses_post($fields['heading'] ?? ''); ?></h2>
        <p><?php echo esc_html($fields['description'] ?? ''); ?></p>
    </div>

    <div class="consultation-form">
        <h3><?php echo wp_kses_post($fields['form_heading'] ?? ''); ?></h3>
        <?php
        if (! empty($fields['form_shortcode'])) {
            echo do_shortcode($fields['form_shortcode']);
        }
        ?>
    </div>
</section>
