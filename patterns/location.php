<?php
/**
 * Title: Location
 * Slug: villacde/location
 * Categories: villacde
 */

?>
<!-- wp:group {"tagName":"section","anchor":"location","className":"v-section v-section--location","layout":{"type":"default"}} -->
<section id="location" class="wp-block-group v-section v-section--location">

	<!-- wp:group {"className":"v-container v-pad-y loc-inner","layout":{"type":"default"}} -->
	<div class="wp-block-group v-container v-pad-y loc-inner">

		<!-- wp:group {"className":"loc-copy","layout":{"type":"default"}} -->
		<div class="wp-block-group loc-copy">

			<!-- wp:paragraph {"className":"v-eyebrow"} -->
			<p class="v-eyebrow">Location</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"className":"v-h2"} -->
			<h2 class="wp-block-heading v-h2">Off Moi South Lake Road.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"loc-intro"} -->
			<p class="loc-intro">About two hours' drive from Nairobi, on the quiet south side of the lake, in a gated estate with security patrols.</p>
			<!-- /wp:paragraph -->

			<!-- wp:html -->
			<ul class="fact-list">
				<li><span>Lake Naivasha</span><span>Boat rides, birdlife</span></li>
				<li><span>Hell's Gate National Park</span><span>Cycling, gorge walks</span></li>
				<li><span>Mount Longonot</span><span>Crater rim hike</span></li>
			</ul>
			<!-- /wp:html -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"btn-night"} -->
				<div class="wp-block-button btn-night"><a class="wp-block-button__link wp-element-button" href="https://maps.app.goo.gl/PCNRas7ni31dfGcJ6" target="_blank" rel="noreferrer noopener">Get directions</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

		<!-- wp:image {"id":28,"sizeSlug":"full","linkDestination":"custom","className":"map-link"} -->
		<figure class="wp-block-image size-full map-link"><a href="https://maps.app.goo.gl/PCNRas7ni31dfGcJ6" target="_blank" rel="noreferrer noopener"><img src="<?php echo esc_url( wp_get_attachment_image_url( 28, 'full' ) ); ?>" alt="Map showing Villa CDE's location on Moi South Lake Road near Lake Naivasha and Hell's Gate National Park" class="wp-image-28"/></a></figure>
		<!-- /wp:image -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
