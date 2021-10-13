<?php
/**
 * CSS variables as set by ACF site options
 *
 */

// getting ACF fields into easy to read variables

if ( have_rows( 'design_colors', 'option' ) ) :
	while ( have_rows( 'design_colors', 'option' ) ) : the_row();
		$page_top_color_bar = get_sub_field( 'page_top_color_bar' );
		$text_link_color = get_sub_field( 'text_link_color' );
		$text_link_hover_color = get_sub_field( 'text_link_hover_color' );
		$default_button_background_color = get_sub_field( 'default_button_background_color' );
		$default_button_text_color = get_sub_field( 'default_button_text_color' );
		$default_button_hover_background_color = get_sub_field( 'default_button_hover_background_color' );
		$default_button_hover_text_color = get_sub_field( 'default_button_hover_text_color' );
		$secondary_button_background_color = get_sub_field( 'secondary_button_background_color' );
		$secondary_button_text_color = get_sub_field( 'secondary_button_text_color' );
		$secondary_button_hover_background_color = get_sub_field( 'secondary_button_hover_background_color' );
		$secondary_button_hover_text_color = get_sub_field( 'secondary_button_hover_text_color' );
		$accent_color_header = get_sub_field( 'accent_color_header' );
		$accent_color_separator = get_sub_field( 'accent_color_separator' );
		$page_footer_color = get_sub_field( 'page_footer_color' );
		$page_footer_text_color = get_sub_field( 'page_footer_text_color' );
		$page_footer_text_link_color = get_sub_field( 'page_footer_text_link_color' );
		$page_footer_text_link_hover_color = get_sub_field( 'page_footer_text_link_hover_color' );

	endwhile;
endif;

if ( have_rows( 'top_navigation_bar_options', 'option' ) ) :
	while ( have_rows( 'top_navigation_bar_options', 'option' ) ) : the_row();
		$nav_item_background_color = get_sub_field( 'nav_item_background_color' );
		$nav_item_text_color = get_sub_field( 'nav_item_text_color' );
		$hover_background_color = get_sub_field( 'hover_background_color' );
		$hover_text_color = get_sub_field( 'hover_text_color' );
		$navigation_text_size = get_sub_field( 'navigation_text_size' );
		$navigation_text_style = get_sub_field( 'navigation_text_style' );
	endwhile;
endif;

if ( have_rows( 'typography_options', 'option' ) ) :
	while ( have_rows( 'typography_options', 'option' ) ) : the_row();
		$default_size = get_sub_field( 'default_size' );
		/*$ = get_sub_field( 'header_text_color' );
		$ = get_sub_field( 'header_text_color' );
		$ = get_sub_field( 'header_text_color' );
		$ = get_sub_field( 'header_text_color' );
		$ = get_sub_field( 'header_text_color' );
		$ = get_sub_field( 'header_text_color' );
		$ = get_sub_field( 'header_text_color' );*/
	endwhile;
endif;

if ( have_rows( 'logo_colors', 'option' ) ) :
	while ( have_rows( 'logo_colors', 'option' ) ) : the_row();
		$birdcage_color = get_sub_field( 'birdcage_color' );
		$branch_color = get_sub_field( 'branch_color' );
		$bird_color_main = get_sub_field( 'bird_color_main' );
		$bird_color_secondary = get_sub_field( 'bird_color_secondary' );
		$leaves_color_dark_01 = get_sub_field( 'leaves_color_dark_01' );
		$leaves_color_primary = get_sub_field( 'leaves_color_primary' );
		$leaves_color_dark_02 = get_sub_field( 'leaves_color_dark_02' );
		$leaves_color_light = get_sub_field( 'leaves_color_light' );
		$leaves_lines = get_sub_field( 'leaves_lines' );
		$flower_color_main = get_sub_field( 'flower_color_main' );
		$flower_color_main_darker = get_sub_field( 'flower_color_main_darker' );
		$flower_color_light = get_sub_field( 'flower_color_light' );
		$flower_color_lightest = get_sub_field( 'flower_color_lightest' );
		$flower_color_center_color = get_sub_field( 'flower_color_center_color' );
	endwhile;
endif;
?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Dancing+Script:wght@700&family=Open+Sans:ital,wght@0,300;0,600;0,800;1,300;1,600;1,800&display=swap" rel="stylesheet">

<style rel="stylesheet" type="text/css">
	:root {
		--header_color_bar: <?php esc_html_e( $page_top_color_bar ); ?>;
		--text_link_color: <?php esc_html_e( $text_link_color ); ?>;
		--text_link_hover_color: <?php esc_html_e( $text_link_hover_color ); ?>;

		--border_radius: 2em;

		--button_background_color: <?php esc_html_e( $default_button_background_color ); ?>;
		--button_text_color: <?php esc_html_e( $default_button_text_color ); ?>;
		--button_hover_background_color: <?php esc_html_e( $default_button_hover_background_color ); ?>;
		--button_hover_text_color: <?php esc_html_e( $default_button_hover_text_color ); ?>;
		--secondary_button_background_color: <?php esc_html_e( $secondary_button_background_color ); ?>;
		--secondary_button_text_color: <?php esc_html_e( $secondary_button_text_color ); ?>;
		--secondary_button_hover_background_color: <?php esc_html_e( $secondary_button_hover_background_color ); ?>;
		--secondary_button_hover_text_color: <?php esc_html_e( $secondary_button_hover_text_color ); ?>;


		--accent_lines-header: <?php esc_html_e( $accent_color_header ); ?>;
		--accent_lines-separator: <?php esc_html_e( $accent_color_separator ); ?>;


		--nav_opt-style: rounded;
		--nav_opt-text_size: <?php esc_html_e( $navigation_text_size ); ?>;
		--nav_opt-text_style: <?php esc_html_e( $navigation_text_style ); ?>;
		--nav_opt-background_color: <?php esc_html_e( $nav_item_background_color ); ?>;
		--nav_opt-text_color: <?php esc_html_e( $nav_item_text_color ); ?>;
		--nav_opt-hover_background_color: <?php esc_html_e( $hover_background_color ); ?>;
		--nav_opt-hover_text_color: <?php esc_html_e( $hover_text_color ); ?>;

		--type_opt-body_text_font: 'Open Sans', sans-serif;
		--type_opt-header_text_font: 'Bree Serif', serif;
		--type_opt-tagline_font: 'Dancing Script', cursive;
		--type_opt-base_font_size: <?php esc_html_e( $default_size ); ?>px;

		--logo_color-birdcage_color: <?php esc_html_e( $birdcage_color ); ?>;
		--logo_color-bird_color_main: <?php esc_html_e( $bird_color_main ); ?>;
		--logo_color-bird_color_secondary:<?php esc_html_e( $bird_color_secondary ); ?>;
		--logo_color-branch_color: <?php esc_html_e( $branch_color ); ?>;
		--logo_color-leaves_color_dark_01: <?php esc_html_e( $leaves_color_dark_01 ); ?>;
		--logo_color-leaves_color_primary: <?php esc_html_e( $leaves_color_primary ); ?>;
		--logo_color-leaves_color_dark_02:<?php esc_html_e( $leaves_color_dark_02 ); ?>;
		--logo_color-leaves_color_light: <?php esc_html_e( $leaves_color_light ); ?>;
		--logo_color-leaves_lines: <?php esc_html_e( $leaves_lines ); ?>;
		--logo_color-flower_color_lightest: <?php esc_html_e( $flower_color_lightest ); ?>;
		--logo_color-flower_color_light: <?php esc_html_e( $flower_color_light ); ?>;
		--logo_color-flower_color_main: <?php esc_html_e( $flower_color_main ); ?>;;
		--logo_color-flower_color_main_darker: <?php esc_html_e( $flower_color_main_darker ); ?>;
		--logo_color-flower_center_color: <?php esc_html_e( $flower_color_center_color ); ?>;

		--footer_background_color: <?php esc_html_e( $page_footer_color ); ?>;
		--footer_text_color: <?php esc_html_e( $page_footer_text_color ); ?>;
		--footer_text_link_color: <?php esc_html_e( $page_footer_text_link_color ); ?>;
		--footer_text_link_hover_color: <?php esc_html_e( $page_footer_text_link_hover_color ); ?>;
	}
</style>
