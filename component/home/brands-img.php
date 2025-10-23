<?php
defined('ABSPATH') || exit;

$fields = $args['fields'] ?? [];
?>

<section class="brands-section">
    <div class="container">
        <div class="brands-container">
            <?php if (!empty($fields['title'])): ?>
                <p class="clients-heading">
                    <?php echo esc_html($fields['title']); ?>
                </p>
            <?php endif; ?>

            <?php if (!empty($fields['images'])): ?>
                <div class="clients-logos">
                    <?php foreach ($fields['images'] as $image): ?>
                        <?php if (!empty($image['brand_image'])): ?>
                            <img src="<?php echo esc_url(wp_get_attachment_image_url($image['brand_image'], 'medium')); ?>"
                                alt="Brand Logo">
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>