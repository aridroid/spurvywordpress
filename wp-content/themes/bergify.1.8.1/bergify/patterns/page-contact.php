<?php
/**
* Title: Contact Page
* Slug: bergify/page-contact
* Categories: pages
* Block Types: core/post-content
* Inserter: yes
* Description: Full page design for the Contact page
*/
unset($bg);
require get_template_directory() . '/patterns/service-hero.php';
require get_template_directory() . '/patterns/company-contacts.php';
require get_template_directory() . '/parts/form-cf7.html';
$bg = 'quaternary';
require get_template_directory() . '/patterns/faq-html.php';
