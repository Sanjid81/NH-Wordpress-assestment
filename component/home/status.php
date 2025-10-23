 <?php
    defined('ABSPATH') || exit;
    $fields = $fields ?? [];
    ?>

 <section class="stats-section">
     <?php foreach ($fields['stats_items'] as $item) :
            $num = esc_html($item['number'] ?? '');
            $lbl = esc_html($item['label'] ?? '');
        ?>
         <div class="cf-stat">
             <h2><?php echo $num; ?></h2>
             <p><?php echo $lbl; ?></p>
         </div>
     <?php endforeach; ?>
 </section>