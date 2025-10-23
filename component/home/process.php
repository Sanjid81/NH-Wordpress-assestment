<?php
defined('ABSPATH') || exit;

// $fields variable directly available
?>

<section class="process">
    <div class="container">
        <div class="section-header">
            <?php if (!empty($fields['title'])): ?>
                <h2><?= esc_html($fields['title']); ?></h2>
            <?php endif; ?>

            <?php if (!empty($fields['description'])): ?>
                <div class="process-description">
                    <?= wp_kses_post(wpautop($fields['description'])); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="process-grid">
            <?php if (!empty($fields['steps'])): ?>
                <?php foreach ($fields['steps'] as $step): ?>
                    <div class="process-item">
                        <?php if (!empty($step['step_number'])): ?>
                            <div class="step-number"><?= esc_html($step['step_number']); ?></div>
                        <?php endif; ?>

                        <?php if (!empty($step['step_title'])): ?>
                            <h3><?= esc_html($step['step_title']); ?></h3>
                        <?php endif; ?>

                        <?php if (!empty($step['step_content'])): ?>
                            <p><?= esc_html($step['step_content']); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>