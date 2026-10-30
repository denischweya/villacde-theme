<?php
/**
 * Title: Hero
 * Slug: villacde/hero
 * Categories: villacde
 */

$villacde_hero_attrs = array(
	'align'               => 'full',
	'anchor'              => 'top',
	'heroVideoId'         => 39,
	'heroVideoUrl'        => wp_get_attachment_url( 39 ),
	'heroVideoWebmUrl'    => wp_get_attachment_url( 40 ),
	'heroVideoMobileUrl'  => wp_get_attachment_url( 41 ),
	'heroPosterId'        => 24,
	'heroPosterUrl'       => wp_get_attachment_image_url( 24, 'full' ),
	'tourVideoId'         => 42,
	'tourVideoUrl'        => wp_get_attachment_url( 42 ),
);
$villacde_hero_video_url        = esc_url( $villacde_hero_attrs['heroVideoUrl'] );
$villacde_hero_video_webm_url   = esc_url( $villacde_hero_attrs['heroVideoWebmUrl'] );
$villacde_hero_video_mobile_url = esc_url( $villacde_hero_attrs['heroVideoMobileUrl'] );
$villacde_hero_poster_url       = esc_url( $villacde_hero_attrs['heroPosterUrl'] );
$villacde_hero_tour_url         = esc_url( $villacde_hero_attrs['tourVideoUrl'] );
?>
<!-- wp:villacde-core/hero <?php echo wp_json_encode( $villacde_hero_attrs ); ?> -->
<div class="wp-block-villacde-core-hero alignfull villacde-hero" id="top"><video class="villacde-hero__video" poster="<?php echo $villacde_hero_poster_url; ?>" autoplay muted loop playsinline preload="auto" aria-label="Video tour of Villa CDE"><source src="<?php echo $villacde_hero_video_mobile_url; ?>" type="video/mp4" media="(max-width: 700px)"/><source src="<?php echo $villacde_hero_video_webm_url; ?>" type="video/webm"/><source src="<?php echo $villacde_hero_video_url; ?>" type="video/mp4"/></video><div class="villacde-hero__scrim" aria-hidden="true"></div><div class="villacde-hero__copy"><div class="villacde-hero__copy-inner"><div class="villacde-hero__copy-main"><p class="villacde-hero__eyebrow"><span aria-hidden="true" class="villacde-hero__eyebrow-rule"></span>Welcome to the Private Escape</p><div class="villacde-hero__title-row"><h1 class="villacde-hero__title">Villa CDE</h1><button type="button" class="villacde-hero__play-btn play-btn" aria-label="Watch the full video tour" data-villacde-hero-play="true"><span class="play-btn-ring" aria-hidden="true"></span><span class="play-btn-ring play-btn-ring-2" aria-hidden="true"></span><svg aria-hidden="true" width="38%" height="38%" viewBox="0 0 24 24" fill="currentColor" class="villacde-hero__play-icon"><path d="M8 5v14l11-7z"></path></svg></button></div><p class="villacde-hero__lead">Six en-suite bedrooms, a private pool and the whole house to yourselves. Moi South Lake Road, Naivasha.</p></div><div class="villacde-hero__actions"><a href="#book" class="villacde-hero__cta">Check availability</a></div></div></div><div id="video-modal" class="villacde-hero__modal" hidden role="dialog" aria-modal="true" aria-label="Villa CDE video tour" data-villacde-hero-modal="true"><button type="button" class="villacde-hero__modal-backdrop" aria-label="Close video" data-villacde-hero-close-trigger="true"></button><div class="villacde-hero__modal-frame"><video id="tour-video" class="villacde-hero__tour-video" src="<?php echo $villacde_hero_tour_url; ?>" controls playsinline preload="none" data-villacde-hero-tour-video="true"></video></div><button type="button" class="villacde-hero__modal-close" aria-label="Close" data-villacde-hero-close-trigger="true" data-villacde-hero-close="true"><svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 6l12 12"></path><path d="M18 6L6 18"></path></svg></button></div></div>
<!-- /wp:villacde-core/hero -->

<!-- wp:group {"className":"stats-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group stats-wrap">

	<!-- wp:group {"className":"stats","layout":{"type":"default"}} -->
	<div class="wp-block-group stats">

		<!-- wp:villacde-core/stat-counter {"targetNumber":6,"label":"En-suite bedrooms"} -->
		<div class="wp-block-villacde-core-stat-counter villacde-stat-counter"><div class="villacde-stat-counter__number"><span data-count="6">6</span></div><div class="villacde-stat-counter__label">En-suite bedrooms</div></div>
		<!-- /wp:villacde-core/stat-counter -->

		<!-- wp:villacde-core/stat-counter {"targetNumber":12,"label":"Max guests"} -->
		<div class="wp-block-villacde-core-stat-counter villacde-stat-counter"><div class="villacde-stat-counter__number"><span data-count="12">12</span></div><div class="villacde-stat-counter__label">Max guests</div></div>
		<!-- /wp:villacde-core/stat-counter -->

		<!-- wp:villacde-core/stat-counter {"targetNumber":24,"suffix":"/7","label":"Security"} -->
		<div class="wp-block-villacde-core-stat-counter villacde-stat-counter"><div class="villacde-stat-counter__number"><span data-count="24" data-suffix="/7">24/7</span></div><div class="villacde-stat-counter__label">Security</div></div>
		<!-- /wp:villacde-core/stat-counter -->

		<!-- wp:villacde-core/stat-counter {"targetNumber":1,"label":"Swimming pool"} -->
		<div class="wp-block-villacde-core-stat-counter villacde-stat-counter"><div class="villacde-stat-counter__number"><span data-count="1">1</span></div><div class="villacde-stat-counter__label">Swimming pool</div></div>
		<!-- /wp:villacde-core/stat-counter -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
