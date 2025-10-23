<?php defined('ABSPATH') || exit;
$fields = $args['fields'] ?? [];

?>

<section class="why-pick">
  <div class="container">
    <div class="section-header">
      <?php if (!empty($fields['title'])): ?>
        <h2><?= esc_html($fields['title']); ?></h2>
      <?php endif; ?>

      <?php if (!empty($fields['description'])): ?>
        <p><?= apply_filters('the_content', $fields['description']); ?></p>
      <?php endif; ?>
    </div>

    <div class="grid-cards">
      <?php if (!empty($fields['cards'])): ?>
        <?php foreach ($fields['cards'] as $index => $card): ?>

          <?php if ($card['_type'] === 'card_one'): ?>
            <!-- Card One  -->
            <div class="card card-one">
              <?php if (!empty($card['card_title'])): ?>
                <h3><?= esc_html($card['card_title']); ?></h3>
              <?php endif; ?>

              <?php if (!empty($card['card_text'])): ?>
                <p><?= apply_filters('the_content', $card['card_text']); ?></p>
              <?php endif; ?>

              <?php if (!empty($card['features'])): ?>
                <ul class="features">
                  <?php foreach ($card['features'] as $feature): ?>
                    <li>
                      <div class="feature-container">
                        <?php if (!empty($feature['feature_image'])): ?>
                          <?php $img = wp_get_attachment_image_src($feature['feature_image'], 'thumbnail'); ?>
                          <?php if ($img): ?>
                            <img class="feature-image" src="<?= esc_url($img[0]); ?>" alt="<?= esc_attr($feature['feature_title']); ?>">
                          <?php endif; ?>
                        <?php endif; ?>

                        <div class="feature-content">
                          <?php if (!empty($feature['feature_title'])): ?>
                            <strong><?= esc_html($feature['feature_title']); ?></strong><br>
                          <?php endif; ?>

                          <?php if (!empty($feature['feature_text'])): ?>
                            <span> <?= esc_html($feature['feature_text']); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>

                      <?php if (!empty($feature['feature_tag'])): ?>
                        <span class="tag"><?= esc_html($feature['feature_tag']); ?></span>
                      <?php endif; ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </div>
          <?php endif; ?>

        <?php endforeach; ?>


        <!-- Card Two + Card Three wrapper -->
        <div class="card-group">
          <?php foreach ($fields['cards'] as $card): ?>
            <?php if ($card['_type'] === 'card_two' || $card['_type'] === 'card_three'): ?>
              <div class="card">
                <div class="card-two">
                  <div class="card-content">
                    <?php if (!empty($card['card_title'])): ?>
                      <h3><?= esc_html($card['card_title']); ?></h3>
                    <?php endif; ?>

                    <?php if (!empty($card['card_text'])): ?>
                      <p><?= apply_filters('the_content', $card['card_text']); ?></p>
                    <?php endif; ?>
                  </div>

                  <?php if ($card['_type'] === 'card_two' && !empty($card['card_image'])): ?>
                    <?php $img = wp_get_attachment_image_src($card['card_image'], 'large'); ?>
                    <?php if ($img): ?>
                      <img src="<?= esc_url($img[0]); ?>" alt="SEO Growth Chart" class="chart">
                    <?php endif; ?>
                  <?php endif; ?>
                </div>

                <?php if ($card['_type'] === 'card_three'): ?>
                  <div class="card-three">
                    <div class="testimonial">
                      <?php if (!empty($card['testimonial_photo'])): ?>
                        <?= wp_get_attachment_image(
                          $card['testimonial_photo'],
                          'thumbnail',
                          false,
                          [
                            'class' => 'testimonial-photo',
                            'alt'   => !empty($card['testimonial_name']) ? esc_attr($card['testimonial_name']) : ''
                          ]
                        ); ?>
                      <?php endif; ?>

                      <div class="card-three-content">
                        <?php if (!empty($card['testimonial_name'])): ?>
                          <p class="name"><?= esc_html($card['testimonial_name']); ?></p>
                        <?php endif; ?>

                        <?php if (!empty($card['testimonial_stars'])): ?>
                          <p class="stars"><?= esc_html($card['testimonial_stars']); ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
        <!-- /card-group -->

      <?php endif; ?>
    </div>

  </div>
</section>