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

// GREEN FIELD
if( 'green-field' == get_field( 'color_theme', 'option') )
	/*||
	'spice-late-dark' == get_field( 'color_theme', 'option'))*/ :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'dark-grey',
			'color' => '#131212',
		),
		array(
			'name'  => __( 'Dark grey brown', 'start' ),
			'slug'  => 'dark-grey-brown',
			'color'	=> '#34322e',
		),
		array(
			'name'  => __( 'Dark green', 'start' ),
			'slug'  => 'dark-green',
			'color'	=> '#364032',
		),

		array(
			'name'  => __( 'Army green', 'start' ),
			'slug'  => 'army-green',
			'color' => '#668C4A',
		),
		array(
			'name'  => __( 'Light army green', 'start' ),
			'slug'  => 'light-army-green',
			'color' => '#A6BF4B',
		),
		array(
			'name'  => __( 'Cream yellow', 'start' ),
			'slug'  => 'cream-yellow',
			'color' => '#F2F0D5',
		),
		array(
			'name'  => __( 'Yellow orange', 'start' ),
			'slug'  => 'yellow-orange',
			'color' => '#F2C53D',
		),
		array(
			'name'  => __( 'Medium grey', 'start' ),
			'slug'  => 'medium-grey',
			'color' => '#B1B1AC',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;

// SALE AT THE GAP
if( 'sale-at-the-gap' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'dark-grey',
			'color' => '#131212',
		),
		array(
			'name'  => __( 'Dark maroon', 'start' ),
			'slug'  => 'dark-maroon',
			'color'	=> '#281416',
		),
		array(
			'name'  => __( 'Maroon', 'start' ),
			'slug'  => 'maroon',
			'color'	=> '#5c1d24',
		),
		array(
			'name'  => __( 'Book cover brown', 'start' ),
			'slug'  => 'book-cover-brown',
			'color'	=> '#583F36',
		),
		array(
			'name'  => __( 'Muddy brown', 'start' ),
			'slug'  => 'muddy-brown',
			'color' => '#715337',
		),
		array(
			'name'  => __( 'Medium grey blue', 'start' ),
			'slug'  => 'medium-grey-blue',
			'color' => '#677fa5',
		),
		array(
			'name'  => __( 'Light grey blue', 'start' ),
			'slug'  => 'light-grey-blue',
			'color' => '#BFCAD8',
		),
		array(
			'name'  => __( 'Subtle blue', 'start' ),
			'slug'  => 'subtle-blue',
			'color' => '#EDF1F4',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;


// NEUTRAL LIGHT/DARK
if( 'neutral-light' == get_field( 'color_theme', 'option') ||
	'neutral-dark' == get_field( 'color_theme', 'option')) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Trendy grey', 'start' ),
			'slug'  => 'trendy-grey',
			'color' => '#666161',
		),
		array(
			'name'  => __( 'Dusty grey', 'start' ),
			'slug'  => 'dusty-grey',
			'color'	=> '#ADA5A5',
		),
		array(
			'name'  => __( 'Rusty maroon', 'start' ),
			'slug'  => 'rusty-maroon',
			'color'	=> '#322323',
		),
		array(
			'name'  => __( 'Trendy maroon', 'start' ),
			'slug'  => 'trendy-maroon',
			'color'	=> '#744140',
		),
		array(
			'name'  => __( 'Eggshell', 'start' ),
			'slug'  => 'eggshell',
			'color'	=> '#F3E9D7',
		),
		array(
			'name'  => __( 'Subtle red', 'start' ),
			'slug'  => 'subtle-red',
			'color' => '#E6DADA',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;