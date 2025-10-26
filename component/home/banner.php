<?php
defined('ABSPATH') || exit;

$fields = $args['fields'] ?? [];
?>

<section class="seo-section">
    <div class="container">
        <div class="seo-wraper">
            <div class="seo-content">
                <h1>
                    <?php echo esc_html($fields['title'] ?? ''); ?> <br>
                    <span class="highlight"><?php echo esc_html($fields['highlight'] ?? ''); ?></span>
                </h1>
                <p><?php echo wp_kses_post($fields['description'] ?? ''); ?></p>

                <div class="btn-group">
                    <?php if (!empty($fields['btn1_text'])): ?>
                        <a href="<?php echo esc_url($fields['btn1_url'] ?? '#'); ?>" class="btn primary">
                            <?php echo esc_html($fields['btn1_text']); ?>
                        </a>
                    <?php endif; ?>

                    <?php if (!empty($fields['btn2_text'])): ?>
                        <a href="<?php echo esc_url($fields['btn2_url'] ?? '#'); ?>" class="btn secondary">
                            <?php echo esc_html($fields['btn2_text']); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <?php if (!empty($fields['features'])): ?>
                    <div class="features">
                        <?php foreach ($fields['features'] as $feature): ?>
                            <span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.33309 12.6424L15.9934 4.98212L17.1719 6.16063L8.33309 14.9994L3.02979 9.69618L4.2083 8.51768L8.33309 12.6424Z" fill="#2D3342" />
                                </svg>
                                <?php echo esc_html($feature['feature_text']); ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="seo-image">
                <div class="image-wrapper">
                    <?php if (!empty($fields['main_image'])): ?>
                        <img src="<?php echo esc_url(wp_get_attachment_image_url($fields['main_image'], 'large')); ?>" alt="SEO Image">
                    <?php endif; ?>

                    <?php if (!empty($fields['twitter_icon'])): ?>
                        <div class="badge twitter">
                            <img src="<?php echo esc_url(wp_get_attachment_image_url($fields['twitter_icon'], 'thumbnail')); ?>" alt="Twitter">
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($fields['google_icon'])): ?>
                        <div class="badge google">
                            <img src="<?php echo esc_url(wp_get_attachment_image_url($fields['google_icon'], 'thumbnail')); ?>" alt="Google">
                        </div>
                    <?php endif; ?>

                    <div class="card engagement">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 46C35.7026 46 46 35.7025 46 23C46 10.2974 35.7026 0 23 0C10.2975 0 0 10.2974 0 23C0 35.7025 10.2975 46 23 46Z" fill="white" />
                            <circle cx="23" cy="23" r="16" fill="#38C793" />
                            <path d="M16.7787 23.1951L23.0009 15L29.2231 23.1951H16.7787Z" fill="white" />
                            <path d="M16.7787 31L23.0009 22.8049L29.2231 31H16.7787Z" fill="white" />
                        </svg>

                        <div class="card-content">
                            <h4><?php echo esc_html($fields['card1_title'] ?? ''); ?></h4>
                            <p><?php echo esc_html($fields['card1_desc'] ?? ''); ?></p>
                        </div>

                    </div>

                    <div class="card client">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 46C35.7026 46 46 35.7025 46 23C46 10.2974 35.7026 0 23 0C10.2975 0 0 10.2974 0 23C0 35.7025 10.2975 46 23 46Z" fill="white" />
                            <path opacity="0.9" d="M23 8C20.0333 8 17.1332 8.87973 14.6665 10.528C12.1997 12.1762 10.2771 14.5189 9.14181 17.2597C8.0065 20.0006 7.70945 23.0166 8.28823 25.9263C8.86701 28.8361 10.2956 31.5088 12.3934 33.6066C14.4912 35.7044 17.1639 37.133 20.0736 37.7118C22.9834 38.2906 25.9994 37.9935 28.7403 36.8582C31.4811 35.7229 33.8238 33.8003 35.472 31.3335C37.1203 28.8668 38 25.9667 38 23C38 19.0217 36.4196 15.2064 33.6066 12.3934C30.7936 9.58035 26.9783 8 23 8ZM28.4908 17.6099C28.8716 17.6095 29.2439 17.7221 29.5606 17.9334C29.8774 18.1447 30.1244 18.4452 30.2702 18.7969C30.4161 19.1486 30.4544 19.5357 30.3802 19.9091C30.306 20.2826 30.1227 20.6257 29.8535 20.8949C29.5842 21.1642 29.2412 21.3475 28.8677 21.4217C28.4942 21.4959 28.1071 21.4576 27.7554 21.3117C27.4037 21.1658 27.1032 20.9188 26.8919 20.6021C26.6806 20.2853 26.568 19.913 26.5684 19.5322C26.5684 19.0224 26.771 18.5334 27.1315 18.1729C27.492 17.8124 27.9809 17.6099 28.4908 17.6099ZM17.5092 17.6099C17.89 17.6095 18.2623 17.7221 18.5791 17.9334C18.8958 18.1447 19.1428 18.4452 19.2887 18.7969C19.4346 19.1486 19.4728 19.5357 19.3987 19.9091C19.3245 20.2826 19.1411 20.6257 18.8719 20.8949C18.6027 21.1642 18.2596 21.3475 17.8861 21.4217C17.5127 21.4959 17.1256 21.4576 16.7739 21.3117C16.4222 21.1658 16.1216 20.9188 15.9103 20.6021C15.699 20.2853 15.5865 19.913 15.5868 19.5322C15.5874 19.0226 15.7901 18.5339 16.1505 18.1735C16.5109 17.8131 16.9995 17.6104 17.5092 17.6099ZM31.4474 26.825C30.8178 30.4191 27.275 32.9118 23 32.9118C18.725 32.9118 15.1842 30.4191 14.5546 26.825C14.5478 26.7885 14.5439 26.7516 14.5428 26.7145C14.5428 26.1954 15.1743 25.8599 15.727 26.0493C17.8586 26.7855 20.3454 27.1605 23.002 27.1605C25.6586 27.1605 28.1454 26.7855 30.277 26.0493C30.8276 25.852 31.4612 26.1934 31.4612 26.7145C31.4594 26.7516 31.4548 26.7886 31.4474 26.825Z" fill="#375DFB" />
                        </svg>

                        <div class="card-content">
                            <h4><?php echo esc_html($fields['card2_title'] ?? ''); ?></h4>
                            <p><?php echo esc_html($fields['card2_desc'] ?? ''); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>