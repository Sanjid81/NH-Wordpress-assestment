<?php
defined('ABSPATH') || exit;
$fields = $fields ?? [];
?>

<section class="testimonials">
    <div class="container">
        <div class="section-header">
            <?php if (!empty($fields['title'])): ?>
                <h2><?php echo esc_html($fields['title']); ?></h2>
            <?php endif; ?>

            <?php if (!empty($fields['description'])): ?>
                <p><?php echo esc_html($fields['description']); ?></p>
            <?php endif; ?>
        </div>

        <!-- Swiper -->
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                <?php if (!empty($fields['testimonials'])): ?>
                    <?php foreach ($fields['testimonials'] as $item): ?>
                        <div class="swiper-slide testimonial-item">
                            <div class="testimonial-content">
                                <div class="testimonial-image">
                                    <?php if (!empty($item['image'])): ?>
                                        <img src="<?php echo wp_get_attachment_image_url($item['image'], 'medium'); ?>" alt="<?php echo esc_attr($item['name']); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="testimonial-text">
                                    <?php if (!empty($item['stars'])): ?>
                                        <div class="stars"><?php echo esc_html($item['stars']); ?></div>
                                    <?php endif; ?>

                                    <?php if (!empty($item['content'])): ?>
                                        <p><?php echo esc_html($item['content']); ?></p>
                                    <?php endif; ?>

                                    <?php if (!empty($item['name'])): ?>
                                        <h4><?php echo esc_html($item['name']); ?></h4>
                                    <?php endif; ?>

                                    <?php if (!empty($item['designation'])): ?>
                                        <span><?php echo esc_html($item['designation']); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Arrows -->
            <div class="arrow-buttons">
                <div class="button-prev">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.7" y="-0.7" width="53.4" height="53.4" rx="26.7" transform="matrix(-1 0 0 1 55.4 2)"
                            stroke="#868C98" stroke-width="1.4" />
                        <path opacity="0.9"
                            d="M26.1448 28.0011L33.9819 20.164L31.7428 17.9248L21.6665 28.0011L31.7428 38.0773L33.9819 35.8381L26.1448 28.0011Z"
                            fill="#525866" stroke="#F3F4E9" stroke-width="0.25" />
                    </svg>
                </div>
                <div class="button-next">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.3" y="1.3" width="53.4" height="53.4" rx="26.7" stroke="#868C98" stroke-width="1.4" />
                        <path opacity="0.9"
                            d="M29.8552 28.0011L22.0181 20.164L24.2572 17.9248L34.3335 28.0011L24.2572 38.0773L22.0181 35.8381L29.8552 28.0011Z"
                            fill="#525866" stroke="#F3F4E9" stroke-width="0.25" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>