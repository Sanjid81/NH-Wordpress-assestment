<?php
defined('ABSPATH') || exit;
$fields = isset($block_fields) ? $block_fields : [];
?>

<section class="blog-section">
    <div class="container">
        <div class="blog-header">
            <h2><?php echo esc_html($fields['section_heading'] ?? ''); ?></h2>
            <p><?php echo esc_html($fields['section_description'] ?? ''); ?></p>
        </div>

        <?php if (!empty($fields['blog_items'])) : ?>
            <div class="blog-grid">
                <?php foreach ($fields['blog_items'] as $item) : ?>
                    <article class="blog-card">
                        <?php if (!empty($item['image'])) : ?>
                            <div class="blog-thumb">
                                <?php echo wp_get_attachment_image($item['image'], 'medium_large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="blog-content">
                            <?php if (!empty($item['title'])) : ?>
                                <h3><?php echo esc_html($item['title']); ?></h3>
                            <?php endif; ?>

                            <?php if (!empty($item['excerpt'])) : ?>
                                <p><?php echo esc_html($item['excerpt']); ?></p>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>