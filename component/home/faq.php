 <?php
    defined('ABSPATH') || exit;

    $fields = $args['fields'] ?? [];
    ?>



 <section class="faq">
     <div class="container">
         <div class="faq-header">
             <?php if (!empty($fields['title'])): ?>
                 <h2><?= $fields['title']; ?></h2>
             <?php endif; ?>

             <?php if (!empty($fields['description'])): ?>
                 <p><?= $fields['description']; ?></p>
             <?php endif; ?>
         </div>
         <div class="web-accordion-container">
             <?php if (! empty($fields['faq_items'])): ?>
                 <?php foreach ($fields['faq_items'] as $item): ?>
                     <div class="web-accordion-item">
                         <div class="web-accordion-title">
                             <h2 class="accordion-title-text"><?php echo esc_html($item['title']); ?></h2>
                             <svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14 6.33337L14 22.6667" stroke="#08090D" stroke-width="2.33333" stroke-linecap="round"
                                     stroke-linejoin="round"></path>
                                 <path d="M22.1654 14.5L13.9987 22.6667L5.83203 14.5" stroke="#08090D" stroke-width="2.33333"
                                     stroke-linecap="round" stroke-linejoin="round"></path>
                             </svg>
                         </div>
                         <div class="web-accordion-content">
                             <p class="web-accordion-inner"><?php echo esc_html($item['content']); ?></p>
                         </div>
                     </div>
                 <?php endforeach; ?>
             <?php endif; ?>
         </div>
         <!-- CTA -->
         <div class="faq-cta">
             <div class="cta-content">
                 <h3><?php echo esc_html($fields['cta_title']); ?></h3>
                 <p><?php echo esc_html($fields['cta_desc']); ?></p>
             </div>
             <a href="<?php echo esc_url($fields['cta_button_link']); ?>" class="cta-button">
                 <?php echo esc_html($fields['cta_button_text']); ?>
             </a>
         </div>
     </div>
 </section>