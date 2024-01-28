<?php
/**
* Title: Full Footer
* Slug: bergify/footer-full
* Categories: footer
* Block Types: core/template-part/footer
* Inserter: yes
* Description: Logo, description, social media, menu columns and copyright notice
*/
?>


<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","right":"20px","bottom":"50px","left":"20px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"33.3%","style":{"spacing":{"padding":{"top":"0px","right":"30px","bottom":"0px","left":"0px"}}}} -->
			<div class="wp-block-column" style="padding-top:0px;padding-right:30px;padding-bottom:0px;padding-left:0px;flex-basis:33.3%"><!-- wp:site-logo {"width":90,"style":{"color":{"duotone":["#ffffff","#ffffff"]}}} /-->
	
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Bergify is a Wordpress block theme suitable for businesses and offering Full-Site Editing.', 'bergify' ); ?></p>
			<!-- /wp:paragraph -->
			
			<!-- wp:social-links {"iconColor":"quaternary","iconColorValue":"#F9FAFB","size":"has-small-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/bergify.official","service":"facebook"} /-->
			<!-- wp:social-link {"url":"https://twitter.com/bergify_","service":"twitter"} /-->
			<!-- wp:social-link {"url":"https://www.instagram.com/bergify_/","service":"instagram"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"16.6%"} -->
			<div class="wp-block-column" style="flex-basis:16.6%"><!-- wp:heading {"level":3,"textColor":"white","fontSize":"normal"} -->
			<h3 class="has-white-color has-text-color has-normal-font-size" id="company"><strong><?php esc_html_e( 'GET BERGIFY', 'bergify' ); ?></strong></h3>
			<!-- /wp:heading -->
			
			<!-- wp:navigation {"customTextColor":"#f9fafb","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"vertical","flexWrap":"nowrap"}} /--></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"16.6%"} -->
			<div class="wp-block-column" style="flex-basis:16.6%"><!-- wp:heading {"level":3,"textColor":"white","fontSize":"normal"} -->
			<h3 class="has-white-color has-text-color has-normal-font-size" id="help-and-support"><strong><?php esc_html_e( 'SUPPORT', 'bergify' ); ?></strong></h3>
			<!-- /wp:heading -->
			
			<!-- wp:navigation {"customTextColor":"#f9fafb","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"vertical","flexWrap":"nowrap"}} /--></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"16.6%"} -->
			<div class="wp-block-column" style="flex-basis:16.6%"><!-- wp:heading {"level":3,"textColor":"white","fontSize":"normal"} -->
			<h3 class="has-white-color has-text-color has-normal-font-size" id="resources"><strong><?php esc_html_e( 'LEGAL', 'bergify' ); ?></strong></h3>
			<!-- /wp:heading -->
			
			<!-- wp:navigation {"customTextColor":"#f9fafb","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"vertical","flexWrap":"nowrap"}} /--></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"16.6%"} -->
			<div class="wp-block-column" style="flex-basis:16.6%"><!-- wp:heading {"level":3,"textColor":"white","fontSize":"normal"} -->
			<h3 class="has-white-color has-text-color has-normal-font-size" id="legal"><strong><?php esc_html_e( 'CONTACT', 'bergify' ); ?></strong></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>HorMart s.r.o.<br>Puskinova 8<br>79601 Prostejov<br>Czech Republic<br><a href="mailto:info@bergify.com">info@bergify.com</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns -->
			
		<!-- wp:separator {"style":{"color":{"background":"#2d3b4b"}},"className":"alignwide is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background alignwide is-style-wide" style="background-color:#2d3b4b;color:#2d3b4b"/>
		<!-- /wp:separator -->
			
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f9fafb"}},"fontSize":"tiny"} -->
		<p class="has-text-align-center has-text-color has-tiny-font-size" style="color:#f9fafb">© <?php echo date("Y"); esc_html_e( ' HorMart s.r.o. All rights reserved.', 'bergify' ); ?></p>
		<!-- /wp:paragraph -->
			
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
