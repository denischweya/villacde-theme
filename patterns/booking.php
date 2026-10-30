<?php
/**
 * Title: Booking
 * Slug: villacde/booking
 * Categories: villacde
 */

?>
<!-- wp:cover {"anchor":"book","url":"<?php echo esc_url( wp_get_attachment_image_url( 29, 'full' ) ); ?>","id":29,"alt":"","dimRatio":70,"overlayColor":"night","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"var:preset|spacing|80","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div id="book" class="wp-block-cover alignfull" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<img class="wp-block-cover__image-background wp-image-29" alt="" src="<?php echo esc_url( wp_get_attachment_image_url( 29, 'full' ) ); ?>" data-object-fit="cover"/>
	<span aria-hidden="true" class="wp-block-cover__background has-night-background-color has-background-dim-70 has-background-dim"></span>
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

					<!-- wp:villacde-core/booking-form -->
					<div class="wp-block-villacde-core-booking-form villacde-booking-form"><div class="villacde-booking-form__thanks" hidden role="status" tabindex="-1" data-villacde-booking-thanks="true"><svg aria-hidden="true" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#B8651F" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M8 12.5l2.5 2.5L16 9.5"></path></svg><p class="villacde-booking-form__thanks-title">Request received</p><p class="villacde-booking-form__thanks-text">We've opened WhatsApp with your request — send that message to confirm your dates at Villa CDE.</p><button type="button" class="villacde-booking-form__reset" data-villacde-booking-reset="true">Send another request</button></div><form class="villacde-booking-form__form" data-villacde-booking-form="true" data-villacde-booking-whatsapp="254713234606" data-villacde-booking-rate="65000" data-villacde-booking-currency="KES"><div class="villacde-booking-form__field villacde-booking-form__field--full dr-field" data-villacde-dr-field="true"><span id="dr-label" class="villacde-booking-form__label">Dates</span><button type="button" id="dr-trigger" class="villacde-booking-form__dr-trigger dr-trigger" aria-haspopup="dialog" aria-expanded="false" aria-controls="dr-cal" aria-labelledby="dr-label dr-text" data-villacde-dr-trigger="true"><svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4.5" width="18" height="16" rx="2.5"></rect><path d="M3 9.5h18"></path><path d="M8 2.5v4"></path><path d="M16 2.5v4"></path></svg><span id="dr-text" class="villacde-booking-form__dr-text dr-text is-placeholder" data-villacde-dr-text="true">Add your dates</span><span id="dr-nights" class="villacde-booking-form__dr-nights dr-nights" data-villacde-dr-nights="true"></span></button><input type="hidden" name="check_in" data-villacde-dr-in="true"/><input type="hidden" name="check_out" data-villacde-dr-out="true"/><div id="dr-cal" class="villacde-booking-form__dr-cal dr-cal" hidden role="dialog" aria-modal="false" aria-label="Choose your dates" data-villacde-dr-cal="true"></div></div><div class="villacde-booking-form__field"><label for="v2nm" class="villacde-booking-form__label">Full name</label><input id="v2nm" name="name" type="text" autocomplete="name" required class="villacde-booking-form__input"/></div><div class="villacde-booking-form__field"><label for="v2em" class="villacde-booking-form__label">Email</label><input id="v2em" name="email" type="email" autocomplete="email" required class="villacde-booking-form__input"/></div><div class="villacde-booking-form__field"><label for="v2ph" class="villacde-booking-form__label">Phone / WhatsApp</label><input id="v2ph" name="phone" type="tel" autocomplete="tel" placeholder="+254" class="villacde-booking-form__input"/></div><div class="villacde-booking-form__field"><label for="v2gu" class="villacde-booking-form__label">Guests (max 12 pax)</label><input id="v2gu" name="guests" type="number" min="1" max="12" placeholder="e.g. 10" required class="villacde-booking-form__input"/></div><div class="villacde-booking-form__field villacde-booking-form__field--full"><label for="v2ms" class="villacde-booking-form__label">Occasion or requests</label><textarea id="v2ms" name="message" rows="3" placeholder="Birthday, arrival time, meals for the chef..." class="villacde-booking-form__textarea"></textarea></div><div class="villacde-booking-form__note">We'll confirm your total when we reply. No payment is taken until then.</div><button type="submit" class="villacde-booking-form__submit">Request to book</button></form></div>
					<!-- /wp:villacde-core/booking-form -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
</div>
<!-- /wp:cover -->
