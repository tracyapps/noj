<?php

// Adds support for editor color palette.

// SPICE LATE / SPICE LATE DARK
if( 'spice-late' == get_field( 'color_theme', 'option') ||
	'spice-late-dark' == get_field( 'color_theme', 'option')) :
	add_theme_support( 'editor-color-palette', array(

		array(
			'name'  => __( 'Dark brown', 'start' ),
			'slug'  => 'dark-brown',
			'color'	=> '#312b28',
		),
		array(
			'name'  => __( 'Light brown', 'start' ),
			'slug'  => 'light-brown',
			'color'	=> '#8B7355',
		),
		array(
			'name'  => __( 'Peach', 'start' ),
			'slug'  => 'peach',
			'color' => '#F4A460',
		),
		array(
			'name'  => __( 'Beige', 'start' ),
			'slug'  => 'beige',
			'color' => '#CDC9A5',
		),
		array(
			'name'  => __( 'Cream', 'start' ),
			'slug'  => 'cream',
			'color' => '#FFE7BA',
		),
		array(
			'name'  => __( 'Offwhite', 'start' ),
			'slug'  => 'offwhite',
			'color' => '#F2F2F2',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;
