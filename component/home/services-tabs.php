<?php
defined('ABSPATH') || exit;

$fields = $args['fields'] ?? [];
?>

<section class="services-tabs">
  <div class="container">
    <div class="section-header">
      <?php if (!empty($fields['section_title'])): ?>
        <h2><?php echo esc_html($fields['section_title']); ?></h2>
      <?php endif; ?>

      <?php if (!empty($fields['section_desc'])): ?>
        <p><?php echo esc_html($fields['section_desc']); ?></p>
      <?php endif; ?>
    </div>

    <div class="tabs-wrapper">
      <!-- Tabs -->
      <div class="tabs">
        <?php if (!empty($fields['tabs'])): ?>
          <?php $i = 0; foreach ($fields['tabs'] as $tab): ?>
            <button class="tab <?php echo $i === 0 ? 'active' : ''; ?>"
                    data-tab="tab<?php echo $i; ?>">
              <?php echo esc_html($tab['tab_title']); ?>
            </button>
          <?php $i++; endforeach; ?>
        <?php endif; ?>
      </div>

      <!-- Tab Content -->
      <div class="tab-content">
        <?php if (!empty($fields['tabs'])): ?>
          <?php $i = 0; foreach ($fields['tabs'] as $tab): ?>
            <div class="tab-panel <?php echo $i === 0 ? 'active' : ''; ?>" id="tab<?php echo $i; ?>">
              <div class="content-grid">
                <div class="text">
                  <?php if (!empty($tab['tab_heading'])): ?>
                    <h3><?php echo esc_html($tab['tab_heading']); ?></h3>
                  <?php endif; ?>

                  <?php if (!empty($tab['tab_content'])): ?>
                    <?php echo wp_kses_post($tab['tab_content']); ?>
                  <?php endif; ?>
                </div>

                <div class="image">
                  <?php if (!empty($tab['tab_image'])): ?>
                    <img src="<?php echo esc_url(wp_get_attachment_image_url($tab['tab_image'], 'large')); ?>"
                         alt="<?php echo esc_attr($tab['tab_title']); ?>">
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php $i++; endforeach; ?>
        <?php endif; ?>
      </div>
    </div>

    <?php if (!empty($fields['cta_text'])): ?>
      <div class="cta">
        <a href="<?php echo esc_url($fields['cta_url']); ?>" class="btn-primary">
          <?php echo esc_html($fields['cta_text']); ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>
