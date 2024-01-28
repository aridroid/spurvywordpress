<?php
/**
* Title: Slim Footer
* Slug: bergify/footer-slim
* Categories: footer
* Block Types: core/template-part/footer
* Inserter: yes
* Description: Copyright notice and social media
*/
?>
<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull">
			
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","right":"20px","bottom":"50px","left":"20px"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group" style="padding-top:50px;padding-bottom:50px;padding-left:20px;padding-right:20px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f9fafb"}},"fontSize":"tiny"} -->
			<p class="has-text-align-center has-text-color has-tiny-font-size" style="color:#f9fafb">© <?php echo date("Y"); esc_html_e( ' HorMart s.r.o. All rights reserved.', 'bergify' ); ?></p>
			<!-- /wp:paragraph -->
			
			<!-- wp:social-links {"iconColor":"light-gray","iconColorValue":"#F9FAFB","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/bergify.official","service":"facebook"} /-->
			<!-- wp:social-link {"url":"https://twitter.com/bergify_","service":"twitter"} /-->
			<!-- wp:social-link {"url":"https://www.instagram.com/bergify_/","service":"instagram"} /--></ul>
			<!-- /wp:social-links --></div>
		<!-- /wp:group --></div>
	<!-- /wp:group -->
			
</div>
<!-- /wp:group -->