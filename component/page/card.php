<?php
$fields = $args['fields'] ?? [];
?>

<div class="card-block">
    <?php if (!empty($fields['title'])) : ?>
        <h2><?php echo esc_html($fields['title']); ?></h2>
    <?php endif; ?>

    <?php if (!empty($fields['description'])) : ?>
        <p><?php echo esc_html($fields['description']); ?></p>
    <?php endif; ?>

    <?php if (!empty($fields['button_text']) && !empty($fields['button_ulr'])) : ?>
        <a href="<?php echo esc_url($fields['button_ulr']); ?>"
           <?php echo !empty($fields['open_in_new_tap']) ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
            <?php echo esc_html($fields['button_text']); ?>
        </a>
    <?php endif; ?>
</div>
