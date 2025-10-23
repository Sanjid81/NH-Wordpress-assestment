<!-- <?php
$fields = $args['fields'] ?? [];
?>

<div class="slider-section">
    <?php if (!empty($fields['title'])) : ?>
        <h2><?php echo esc_html($fields['title']); ?></h2>
    <?php endif; ?>

    <?php if (!empty($fields['feature_image'])) : ?>
        <div class="feature-img">
            <?php 
            echo wp_get_attachment_image(
                $fields['feature_image'], 
                'full', 
                false, 
                ['style' => 'width:500px; height:500px; object-fit:cover;']
            ); 
            ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($fields['sliders'])) : ?>
        <div class="slider-wrapper">
            <?php foreach ($fields['sliders'] as $slide) : ?>
                <div class="slide">
                    <?php if (!empty($slide['slider'])) : ?>
                        <?php 
                        echo wp_get_attachment_image(
                            $slide['slider'], 
                            'full', 
                            false, 
                            ['style' => 'width:500px; height:500px; object-fit:cover;']
                        ); 
                        ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div> -->
