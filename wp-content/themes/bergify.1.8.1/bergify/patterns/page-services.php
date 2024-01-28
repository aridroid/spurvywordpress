<?php
/**
* Title: Service Page
* Slug: bergify/page-services
* Categories: pages
* Block Types: core/post-content
* Inserter: yes
* Description: Full page design for the Service page
*/
unset($bg);
require get_template_directory() . '/patterns/service-hero.php';
require get_template_directory() . '/patterns/selling-propositions.php';
require get_template_directory() . '/patterns/service-description-1.php';
require get_template_directory() . '/patterns/service-description-2.php';
$bg = 'quaternary';
require get_template_directory() . '/patterns/contact-form.php';
