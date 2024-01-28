<?php
/**
* Title: About Page
* Slug: bergify/page-about
* Categories: pages
* Block Types: core/post-content
* Inserter: yes
* Description: Full page design for the About page
*/
unset($bg);
require get_template_directory() . '/patterns/about-hero.php';
require get_template_directory() . '/patterns/about-us.php';
require get_template_directory() . '/patterns/team.php';
require get_template_directory() . '/patterns/featured.php';
$bg = 'quaternary';
require get_template_directory() . '/patterns/testimonials.php';
unset($bg);
require get_template_directory() . '/patterns/contact-form.php';
