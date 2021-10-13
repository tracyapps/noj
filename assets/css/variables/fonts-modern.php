<?php
/**
 * CSS variable import: fonts - modern
 *
 */ ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;700&family=Cutive+Mono&display=swap" rel="stylesheet">

<style rel="stylesheet" type="text/css">
	:root {
		--typography-header_text:		'Cutive Mono', monospace;
		--typography-body_text:			'Be Vietnam Pro', sans-serif;
		--typography-base_font_size:	16px;
		--typography-h1_size:			calc( 4 * var(--typography-base_font_size) );
		--typography-h2_size:			calc( 3 * var(--typography-base_font_size) );
		--typography-h3_size:			calc( 2.5 * var(--typography-base_font_size) );
		--typography-h4_size:			calc( 2 * var(--typography-base_font_size) );
		--typography-h5_size:			calc( 1.6 * var(--typography-base_font_size) );
		--typography-h6_size:			calc( 1.1 * var(--typography-base_font_size) );
	}
	h1, h2, h3, h4, h5, h6 {
		letter-spacing: -0.13ch;
	}
</style>
