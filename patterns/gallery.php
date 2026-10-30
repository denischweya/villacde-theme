<?php
/**
 * Title: Gallery
 * Slug: villacde/gallery
 * Categories: villacde
 */

?>
<!-- wp:group {"anchor":"gallery","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div id="gallery" class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:0">

	<!-- wp:columns {"align":"wide","verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"top":"16px","left":"24px"},"margin":{"bottom":"36px"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom" style="margin-bottom:36px">

		<!-- wp:column {"verticalAlignment":"bottom","width":"60%","style":{"spacing":{"blockGap":"16px"}}} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">

			<!-- wp:paragraph {"textColor":"amber-ink","style":{"typography":{"fontSize":"13px","fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
			<p class="has-amber-ink-color has-text-color" style="font-size:13px;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Gallery</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontFamily":"bricolage-grotesque","style":{"typography":{"fontSize":"clamp(40px, 5.4vw, 76px)","fontWeight":"600","lineHeight":"0.98","letterSpacing":"-0.035em"}}} -->
			<h2 class="wp-block-heading has-bricolage-grotesque-font-family" style="font-size:clamp(40px, 5.4vw, 76px);font-weight:600;letter-spacing:-0.035em;line-height:0.98">Take a look around.</h2>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:paragraph {"textColor":"slate","style":{"typography":{"fontSize":"15px"}}} -->
			<p class="has-slate-color has-text-color" style="font-size:15px">Tap any photo to view it full screen.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","className":"villacde-gallery-grid"} -->
	<div class="wp-block-group alignwide villacde-gallery-grid">

		<!-- wp:image {"id":22,"sizeSlug":"full","className":"villacde-gallery-item is-span-2","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item is-span-2 has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 22, 'full' ) ); ?>" alt="The sunken fire pit lounge beside the pool" class="wp-image-22" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":31,"sizeSlug":"full","className":"villacde-gallery-item","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 31, 'full' ) ); ?>" alt="The swimming pool, looking back at the villa" class="wp-image-31" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":25,"sizeSlug":"full","className":"villacde-gallery-item","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 25, 'full' ) ); ?>" alt="Open kitchen with a breakfast bar and pendant lights" class="wp-image-25" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":19,"sizeSlug":"full","className":"villacde-gallery-item","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 19, 'full' ) ); ?>" alt="Row of colourful Adirondack chairs outside the villa" class="wp-image-19" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":26,"sizeSlug":"full","className":"villacde-gallery-item","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 26, 'full' ) ); ?>" alt="Lounge with recliner sofas, a fireplace and a smart TV" class="wp-image-26" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":30,"sizeSlug":"full","className":"villacde-gallery-item","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 30, 'full' ) ); ?>" alt="The swimming pool seen from directly above" class="wp-image-30" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":35,"sizeSlug":"full","className":"villacde-gallery-item","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 35, 'full' ) ); ?>" alt="Rain shower head in a marble en-suite" class="wp-image-35" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":29,"sizeSlug":"full","className":"villacde-gallery-item is-span-2","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item is-span-2 has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 29, 'full' ) ); ?>" alt="The villa at night with the pool lit blue" class="wp-image-29" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":33,"sizeSlug":"full","className":"villacde-gallery-item is-span-2","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item is-span-2 has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 33, 'full' ) ); ?>" alt="Rooftop terrace seating with views over the Rift Valley" class="wp-image-33" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":37,"sizeSlug":"full","className":"villacde-gallery-item","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 37, 'full' ) ); ?>" alt="Twin bedroom with warm bedside lighting" class="wp-image-37" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":27,"sizeSlug":"full","className":"villacde-gallery-item","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 27, 'full' ) ); ?>" alt="A shelf of films and books in the lounge" class="wp-image-27" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":11,"sizeSlug":"full","className":"villacde-gallery-item is-span-2","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item is-span-2 has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 11, 'full' ) ); ?>" alt="Aerial view of the villa and the farmland around it" class="wp-image-11" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":23,"sizeSlug":"full","className":"villacde-gallery-item is-span-2","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item is-span-2 has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 23, 'full' ) ); ?>" alt="The stone fountain at the villa entrance" class="wp-image-23" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":12,"sizeSlug":"full","className":"villacde-gallery-item","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 12, 'full' ) ); ?>" alt="Maasai beadwork hanging on the stairwell wall" class="wp-image-12" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":21,"sizeSlug":"full","className":"villacde-gallery-item","style":{"border":{"radius":"12px"}},"lightbox":{"enabled":true}} -->
		<figure class="wp-block-image size-full villacde-gallery-item has-custom-border"><img src="<?php echo esc_url( wp_get_attachment_image_url( 21, 'full' ) ); ?>" alt="The villa from the driveway under open sky" class="wp-image-21" style="border-radius:12px"/></figure>
		<!-- /wp:image -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
