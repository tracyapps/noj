<?php

// Adds support for editor color palette.
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Light gray', 'genesis-sample' ),
		'slug'  => 'light-gray',
		'color'	=> '#f5f5f5',
	),
	array(
		'name'  => __( 'Medium gray', 'genesis-sample' ),
		'slug'  => 'medium-gray',
		'color' => '#999',
	),
	array(
		'name'  => __( 'Dark gray', 'genesis-sample' ),
		'slug'  => 'dark-gray',
		'color' => '#333',
	),
) );