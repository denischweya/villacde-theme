<?php
/**
 * Title: Booking
 * Slug: villacde/booking
 * Categories: villacde
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( wp_get_attachment_image_url( 29, 'full' ) ); ?>","id":29,"alt":"","dimRatio":70,"overlayColor":"night","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"var:preset|spacing|80","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<span aria-hidden="true" class="wp-block-cover__background has-night-background-color has-background-dim-70 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( wp_get_attachment_image_url( 29, 'full' ) ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"80px"}}}} -->
		<div class="wp-block-columns alignwide">

			<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"22px"}}} -->
			<div class="wp-block-column" style="flex-basis:40%">

				<!-- wp:paragraph {"textColor":"amber","style":{"typography":{"fontSize":"13px","fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
				<p class="has-amber-color has-text-color" style="font-size:13px;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Book your stay</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"textColor":"mist","fontFamily":"bricolage-grotesque","style":{"typography":{"fontSize":"clamp(40px, 5.4vw, 76px)","fontWeight":"600","lineHeight":"0.98","letterSpacing":"-0.035em"}}} -->
				<h2 class="wp-block-heading has-mist-color has-text-color has-bricolage-grotesque-font-family" style="font-size:clamp(40px, 5.4vw, 76px);font-weight:600;letter-spacing:-0.035em;line-height:0.98">When the sun sets, the pool lights up.</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"fog"} -->
				<p class="has-fog-color has-text-color">Pick your dates for an instant estimate. We confirm availability and the final price within [24 hours]. No payment is taken until we confirm.</p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<dl style="margin:0;display:grid;grid-template-columns:auto 1fr;gap:10px 24px;font-size:15px;color:var(--wp--preset--color--mist)">
					<dt style="color:var(--wp--preset--color--fog)">Included</dt><dd style="margin:0">Chef, house manager, 24/7 security</dd>
					<dt style="color:var(--wp--preset--color--fog)">Check-in / out</dt><dd style="margin:0">[2:00 pm] / [11:00 am]</dd>
					<dt style="color:var(--wp--preset--color--fog)">Minimum stay</dt><dd style="margin:0">[2 nights]</dd>
				</dl>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"0"}}} -->
			<div class="wp-block-column" style="flex-basis:60%">

				<!-- wp:group {"backgroundColor":"mist","textColor":"night","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"clamp(24px, 3.4vw, 40px)","right":"clamp(24px, 3.4vw, 40px)","bottom":"clamp(24px, 3.4vw, 40px)","left":"clamp(24px, 3.4vw, 40px)"}},"shadow":"0 30px 80px color-mix(in srgb, var(--wp--preset--color--night) 35%, transparent)"},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-night-color has-mist-background-color has-text-color has-background" style="border-radius:16px;padding-top:clamp(24px, 3.4vw, 40px);padding-right:clamp(24px, 3.4vw, 40px);padding-bottom:clamp(24px, 3.4vw, 40px);padding-left:clamp(24px, 3.4vw, 40px);box-shadow:0 30px 80px color-mix(in srgb, var(--wp--preset--color--night) 35%, transparent)">

					<!-- wp:html -->
					<form style="display:grid;grid-template-columns:repeat(auto-fit, minmax(260px, 1fr));gap:16px">
						<div style="display:flex;flex-direction:column;gap:6px">
							<label for="v2ci" style="font-size:13px;font-weight:700;letter-spacing:0.04em">Check-in</label>
							<input id="v2ci" name="check_in" type="date" required style="height:52px;padding:0 14px;border:1px solid var(--wp--preset--color--fog);border-radius:8px;background:var(--wp--preset--color--mist);color:var(--wp--preset--color--night)">
						</div>
						<div style="display:flex;flex-direction:column;gap:6px">
							<label for="v2co" style="font-size:13px;font-weight:700;letter-spacing:0.04em">Check-out</label>
							<input id="v2co" name="check_out" type="date" required style="height:52px;padding:0 14px;border:1px solid var(--wp--preset--color--fog);border-radius:8px;background:var(--wp--preset--color--mist);color:var(--wp--preset--color--night)">
						</div>
						<div style="display:flex;flex-direction:column;gap:6px">
							<label for="v2nm" style="font-size:13px;font-weight:700;letter-spacing:0.04em">Full name</label>
							<input id="v2nm" name="name" type="text" autocomplete="name" required style="height:52px;padding:0 14px;border:1px solid var(--wp--preset--color--fog);border-radius:8px;background:var(--wp--preset--color--mist);color:var(--wp--preset--color--night)">
						</div>
						<div style="display:flex;flex-direction:column;gap:6px">
							<label for="v2em" style="font-size:13px;font-weight:700;letter-spacing:0.04em">Email</label>
							<input id="v2em" name="email" type="email" autocomplete="email" required style="height:52px;padding:0 14px;border:1px solid var(--wp--preset--color--fog);border-radius:8px;background:var(--wp--preset--color--mist);color:var(--wp--preset--color--night)">
						</div>
						<div style="display:flex;flex-direction:column;gap:6px">
							<label for="v2ph" style="font-size:13px;font-weight:700;letter-spacing:0.04em">Phone / WhatsApp</label>
							<input id="v2ph" name="phone" type="tel" autocomplete="tel" placeholder="+254" style="height:52px;padding:0 14px;border:1px solid var(--wp--preset--color--fog);border-radius:8px;background:var(--wp--preset--color--mist);color:var(--wp--preset--color--night)">
						</div>
						<div style="display:flex;flex-direction:column;gap:6px">
							<label for="v2gu" style="font-size:13px;font-weight:700;letter-spacing:0.04em">Guests (max 12 pax)</label>
							<input id="v2gu" name="guests" type="number" min="1" max="12" placeholder="e.g. 10" required style="height:52px;padding:0 14px;border:1px solid var(--wp--preset--color--fog);border-radius:8px;background:var(--wp--preset--color--mist);color:var(--wp--preset--color--night)">
						</div>
						<div style="grid-column:1 / -1;display:flex;flex-direction:column;gap:6px">
							<label for="v2ms" style="font-size:13px;font-weight:700;letter-spacing:0.04em">Occasion or requests</label>
							<textarea id="v2ms" name="message" rows="3" placeholder="Birthday, arrival time, meals for the chef..." style="padding:12px 14px;border:1px solid var(--wp--preset--color--fog);border-radius:8px;background:var(--wp--preset--color--mist);color:var(--wp--preset--color--night);resize:vertical"></textarea>
						</div>
						<div style="grid-column:1 / -1;background:var(--wp--preset--color--mist);border:1px solid var(--wp--preset--color--fog);border-radius:10px;padding:16px 18px;color:var(--wp--preset--color--night-2);font-size:15px">We'll confirm your total when we reply. No payment is taken until then.</div>
						<button type="submit" style="grid-column:1 / -1;height:56px;background:var(--wp--preset--color--amber);color:var(--wp--preset--color--night);border:0;border-radius:8px;font-weight:700;font-size:17px;cursor:pointer">Request to book</button>
					</form>
					<!-- /wp:html -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
</div>
<!-- /wp:cover -->
