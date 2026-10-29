<?php
/**
 * Title: Location
 * Slug: villacde/location
 * Categories: villacde
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"40px","left":"72px"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"22px"}}} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:paragraph {"textColor":"amber-ink","style":{"typography":{"fontSize":"13px","fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
			<p class="has-amber-ink-color has-text-color" style="font-size:13px;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Location</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontFamily":"bricolage-grotesque","style":{"typography":{"fontSize":"clamp(40px, 5.4vw, 76px)","fontWeight":"600","lineHeight":"0.98","letterSpacing":"-0.035em"}}} -->
			<h2 class="wp-block-heading has-bricolage-grotesque-font-family" style="font-size:clamp(40px, 5.4vw, 76px);font-weight:600;letter-spacing:-0.035em;line-height:0.98">Off Moi South Lake Road.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"night-2"} -->
			<p class="has-night-2-color has-text-color">About two hours' drive from Nairobi, on the quiet south side of the lake, in a gated estate with security patrols.</p>
			<!-- /wp:paragraph -->

			<!-- wp:html -->
			<ul style="margin:0;padding:0;list-style:none;display:flex;flex-direction:column">
				<li style="padding:16px 0;border-top:1px solid var(--wp--preset--color--fog);display:flex;justify-content:space-between;gap:16px"><span style="font-weight:600">Lake Naivasha</span><span style="color:var(--wp--preset--color--slate)">Boat rides, birdlife</span></li>
				<li style="padding:16px 0;border-top:1px solid var(--wp--preset--color--fog);display:flex;justify-content:space-between;gap:16px"><span style="font-weight:600">Hell's Gate National Park</span><span style="color:var(--wp--preset--color--slate)">Cycling, gorge walks</span></li>
				<li style="padding:16px 0;border-top:1px solid var(--wp--preset--color--fog);border-bottom:1px solid var(--wp--preset--color--fog);display:flex;justify-content:space-between;gap:16px"><span style="font-weight:600">Mount Longonot</span><span style="color:var(--wp--preset--color--slate)">Crater rim hike</span></li>
			</ul>
			<!-- /wp:html -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"night","textColor":"mist","style":{"border":{"radius":"6px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-mist-color has-night-background-color has-text-color has-background wp-element-button" href="https://maps.app.goo.gl/PCNRas7ni31dfGcJ6" target="_blank" rel="noreferrer noopener" style="border-radius:6px">Get directions</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:image {"id":28,"sizeSlug":"full","linkDestination":"custom","aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"16px"}}} -->
			<figure class="wp-block-image size-full"><a href="https://maps.app.goo.gl/PCNRas7ni31dfGcJ6" target="_blank" rel="noreferrer noopener"><img src="<?php echo esc_url( wp_get_attachment_image_url( 28, 'full' ) ); ?>" alt="Map showing Villa CDE's location on Moi South Lake Road near Lake Naivasha and Hell's Gate National Park" class="wp-image-28" style="border-radius:16px;aspect-ratio:4/3;object-fit:cover"/></a></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
