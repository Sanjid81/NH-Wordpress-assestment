<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action('carbon_fields_register_fields', 'nh_register_components');

function nh_register_components()
{


    // .........banner........
    block::make('block', 'SEO Services Section')
        ->add_fields([
            Field::make('text', 'title', 'Main Title')->set_default_value('Our SEO services are Your key to great online success'),
            Field::make('text', 'highlight', 'Highlighted Text')->set_default_value('online success'),
            Field::make('rich_text', 'description', 'Description'),

            Field::make('text', 'btn1_text', 'Primary Button Text')->set_default_value('Get Started'),
            Field::make('text', 'btn1_url', 'Primary Button Link')->set_default_value('#'),

            Field::make('text', 'btn2_text', 'Secondary Button Text')->set_default_value('Learn More'),
            Field::make('text', 'btn2_url', 'Secondary Button Link')->set_default_value('#'),

            Field::make('complex', 'features', 'Features')
                ->add_fields([
                    Field::make('text', 'feature_text', 'Feature Text'),
                ]),

            Field::make('image', 'main_image', 'Main Image'),
            Field::make('image', 'twitter_icon', 'Twitter Icon'),
            Field::make('image', 'google_icon', 'Google Icon'),

            Field::make('text', 'card1_title', 'Card 1 Title')->set_default_value('120% more engagement'),
            Field::make('text', 'card1_desc', 'Card 1 Description')->set_default_value('Get 100x engagement than before.'),

            Field::make('text', 'card2_title', 'Card 2 Title')->set_default_value('Great Client Experience'),
            Field::make('text', 'card2_desc', 'Card 2 Description')->set_default_value('Get satisfied customer experience.'),
        ])

        ->set_icon('star-filled')
        ->set_keywords(['hero', 'banner'])
        ->set_description('Custom Hero Block')
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            // Pass $fields properly
            get_template_part('component/home/banner', null, ['fields' => $fields]);
        });


    // ................Brand logos...........
    Block::make('Brand Image Section')
        ->add_fields([
            Field::make('text', 'title', 'Main Title')
                ->set_default_value('WE HAVE 500+ CUSTOMERS WORLDWIDE'),

            Field::make('complex', 'images', 'Brand Logos')
                ->add_fields([
                    Field::make('image', 'brand_image', 'Brand Image'),
                ]),
        ])
        ->set_icon('star-filled')
        ->set_keywords(['brands', 'images'])
        ->set_description('Custom Brand Image Block')
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            get_template_part('component/home/brands-img', null, ['fields' => $fields]);
        });


    // .........tab section..........
    Block::make('Services Tabs Section')
        ->add_fields([
            Field::make('text', 'section_title', 'Section Title')
                ->set_default_value("Here's what we bring to the table"),
            Field::make('textarea', 'section_desc', 'Section Description')
                ->set_default_value("Discover our winning combination of expertise, tailor-made strategies, transparency, and proven results."),

            Field::make('complex', 'tabs', 'Tabs')
                ->add_fields([
                    Field::make('text', 'tab_title', 'Tab Title'),
                    Field::make('text', 'tab_heading', 'Tab Content Heading'),
                    Field::make('rich_text', 'tab_content', 'Tab Content'),
                    Field::make('image', 'tab_image', 'Tab Image'),
                ]),
            Field::make('text', 'cta_text', 'CTA Button Text')->set_default_value('Request a Proposal'),
            Field::make('text', 'cta_url', 'CTA Button Link')->set_default_value('#'),
        ])
        ->set_icon('list-view')
        ->set_keywords(['tabs', 'services'])
        ->set_description('Services Tabs with content and image')
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            get_template_part('component/home/services-tabs', null, ['fields' => $fields]);
        });



    // ..............why pick...............
    Block::make('why_top_pick', __('Why Top Pick'))
        ->add_fields([
            Field::make('text', 'title', 'Section Title')
                ->set_default_value("Why We're the Top Pick"),

            Field::make('rich_text', 'description', 'Section Description'),

            Field::make('complex', 'cards', 'Cards')
                ->set_layout('tabbed-vertical')

                // Card 1: With Features
                ->add_fields('card_one', 'Card One (Features)', [
                    Field::make('text', 'card_title', 'Card Title'),
                    Field::make('rich_text', 'card_text', 'Card Text'),
                    Field::make('complex', 'features', 'Features')
                        ->set_layout('tabbed-vertical')
                        ->add_fields([
                            Field::make('text', 'feature_title', 'Feature Text'),
                            Field::make('text', 'feature_text', 'Feature Text'),
                            Field::make('text', 'feature_tag', 'Feature Tag'),
                            Field::make('image', 'feature_image', 'Feature Image'),
                        ]),
                ])

                // Card 2: With Image
                ->add_fields('card_two', 'Card Two (Image)', [
                    Field::make('text', 'card_title', 'Card Title'),
                    Field::make('rich_text', 'card_text', 'Card Text'),
                    Field::make('image', 'card_image', 'Chart/Image'),
                ])

                // Card 3: With Testimonial
                ->add_fields('card_three', 'Card Three (Testimonial)', [
                    Field::make('text', 'card_title', 'Card Title'),
                    Field::make('rich_text', 'card_text', 'Card Text'),
                    Field::make('text', 'testimonial_name', 'Testimonial Name'),
                    Field::make('text', 'testimonial_stars', 'Stars'),
                    Field::make('image', 'testimonial_photo', 'Testimonial Photo'),
                ]),
        ])
        ->set_icon('star-filled')
        ->set_keywords(['seo', 'top pick', 'features'])
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            get_template_part('component/home/why-pick', null, ['fields' => $fields]);
        });


    // ............Faq...........

    block::make('FAQ Accordion')
        ->add_fields([
            Field::make('text', 'title', 'Section Title'),

            Field::make('rich_text', 'description', 'Section Description'),

            Field::make('complex', 'faq_items', 'FAQ Items')
                ->add_fields(array(
                    Field::make('text', 'title', 'Title'),
                    Field::make('textarea', 'content', 'Content'),
                )),
            Field::make('text', 'cta_title', 'CTA Title')->set_default_value('Still have questions?'),
            Field::make('textarea', 'cta_desc', 'CTA Description')->set_default_value('Can’t seem to find the answer? Get in direct contact with our team.'),
            Field::make('text', 'cta_button_text', 'CTA Button Text')->set_default_value('Contact us'),
            Field::make('text', 'cta_button_link', 'CTA Button Link')->set_default_value('#'),
        ])
        ->set_icon('star-filled')
        ->set_keywords(['seo', 'faq', 'faq'])
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            get_template_part('component/home/faq', null, ['fields' => $fields]);
        });



    // ...........Process Section............
    Block::make('process_section', __('Process Section'))
        ->add_fields([
            Field::make('text', 'title', __('Section Title'))
                ->set_default_value("The Way We Do It !"),

            Field::make('rich_text', 'description', __('Section Description')),

            Field::make('complex', 'steps', __('Process Steps'))
                ->add_fields([
                    Field::make('text', 'step_number', __('Step Number')),
                    Field::make('text', 'step_title', __('Step Title')),
                    Field::make('textarea', 'step_content', __('Step Content')),
                ])
        ])
        ->set_icon('feedback')
        ->set_keywords(['process', 'steps', 'how we do it'])
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            // include locate_template dile direct data chole jay front end e data call kora lage na
            include locate_template('component/home/process.php');
        });




    // ..........Testimonials Slider............
    Block::make(__('Testimonials Slider'))
        ->add_fields(array(
            Field::make('text', 'title', 'Section Title')
                ->set_default_value('Hear From Our Clients'),

            Field::make('textarea', 'description', 'Section Description'),

            Field::make('complex', 'testimonials', 'Testimonials')
                ->add_fields(array(
                    Field::make('image', 'image', 'Client Image'),
                    Field::make('text', 'stars', 'Stars')->set_default_value('★★★★★'),
                    Field::make('textarea', 'content', 'Content'),
                    Field::make('text', 'name', 'Client Name'),
                    Field::make('text', 'designation', 'Designation'),
                )),
        ))
        ->set_icon('format-quote')
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            include locate_template('component/home/testimonials.php', false, false);
        });

    // ................states..................
    Block::make(__('Stats Section'))
        ->add_fields(array(
            Field::make('complex', 'stats_items', __('Stats Items', 'cf-stats-block'))
                ->set_layout('tabbed-horizontal')
                ->add_fields('stat', array(
                    Field::make('text', 'number', __('Number', 'cf-stats-block'))
                        ->set_default_value('100+'),
                    Field::make('text', 'label', __('Label', 'cf-stats-block'))
                        ->set_default_value('Example Label'),
                )),
        ))
        ->set_category('layout')
        ->set_icon('chart-bar')
        ->set_description(__('Responsive dynamic stats with repeatable items.', 'cf-stats-block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            include locate_template('component/home/status.php', false, false);
        });





    // ...........cta............
    Block::make(__('Consultation Section', 'cta-consultation-block'))
        ->add_fields(array(
            Field::make('text', 'heading', __('Main Heading', 'cf-consultation-block'))
                ->set_default_value("Get started on your <br> success with a free <br> expert consultation")
                ->set_help_text('You can use <br> for line breaks'),

            Field::make('textarea', 'description', __('Description', 'cf-consultation-block'))
                ->set_default_value('Ready to see how a web solution service agency can help you level up? Book a free consultation today!'),

            Field::make('text', 'form_heading', __('Form Heading', 'cf-consultation-block'))
                ->set_default_value("Contact With Us and Schedule a Free Consultation Meeting"),

            Field::make('text', 'form_shortcode', __('Contact Form 7 Shortcode', 'cf-consultation-block'))
                ->set_default_value('[contact-form-7 id="123" title="Contact form"]')
                ->set_help_text('Paste your Contact Form 7 shortcode here'),
        ))
        ->set_category('layout')
        ->set_icon('feedback')
        ->set_description(__('Consultation section with heading, description, and form.', 'cf-consultation-block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            $block_fields = $fields;
            include locate_template('component/home/cta.php', false, false);
        });



    // .........blog section......
    Block::make(__('Blog Section', 'blog-section'))
        ->add_fields(array(
            Field::make('text', 'section_heading', __('Section Heading', 'cf-blog-block'))
                ->set_default_value('Latest News from Blog'),

            Field::make('textarea', 'section_description', __('Section Description', 'cf-blog-block'))
                ->set_default_value('In our SEO journey, we have a roadmap filled with proven strategies, witty tactics, and a touch of digital magic. Explore the steps that take your website from the shadows to the spotlight.'),

            Field::make('complex', 'blog_items', __('Blog Items', 'cf-blog-block'))
                ->set_layout('tabbed-horizontal')
                ->add_fields('item', array(
                    Field::make('image', 'image', __('Blog Image', 'cf-blog-block')),
                    Field::make('text', 'title', __('Blog Title', 'cf-blog-block')),
                    Field::make('textarea', 'excerpt', __('Blog Excerpt', 'cf-blog-block')),
                )),
        ))
        ->set_category('layout')
        ->set_icon('media-document')
        ->set_description(__('Responsive Blog Section with heading and repeater items.', 'cf-blog-block'))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            $block_fields = $fields;
            include locate_template('component/home/blog-section.php', false, false);
    });




}
