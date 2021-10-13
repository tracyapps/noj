<?php get_header(); ?>

<?php

$featured_image = get_the_post_thumbnail_url( $post->ID, 'full' );
if ( have_rows( 'layout_options' ) ) :
	while ( have_rows( 'layout_options' ) ) : the_row();
		$hero_height = get_sub_field( 'hero_height' );
		$hero_text_position_horizontal = get_sub_field( 'hero_text_position_horizontal' );
		$hero_text_position_vertical = get_sub_field( 'hero_text_position_vertical' );
		$hero_text_color = get_sub_field( 'hero_text_color' );
		$hero_background_overlay = get_sub_field( 'add_a_background' );
	endwhile;
endif;
$hero_classes = $hero_height . ' ' . $hero_text_position_horizontal . ' ' . $hero_text_position_vertical . ' ' . $hero_background_overlay;

?>
<style rel="stylesheet" type="text/css">
	.homepage_hero-container,
	.homepage_hero-container h1,
	.homepage_hero-container p {
		color: <?php echo esc_attr( $hero_text_color ); ?>
	}
</style>
<section
		class="homepage_hero-container <?php esc_html_e( $hero_classes ); ?>"
		style="background-image:url('<?php echo esc_url( $featured_image ); ?>');">

	<div class="homepage_hero_text">
		<h1><?php the_field( 'large_title_text' ); ?></h1>
		<div class="secondary_text">
			<?php the_field( 'secondary_text' ); ?>
		</div>
		<?php if ( have_rows( 'call_to_action_buttons' ) ) : ?>
			<?php while ( have_rows( 'call_to_action_buttons' ) ) : the_row(); ?>

				<?php $cta_link = get_sub_field( 'cta_link' ); ?>
				<?php if ( $cta_link ) { ?>
					<a href="<?php echo $cta_link; ?>" class="button <?php the_sub_field( 'cta_style' ); ?>"><?php the_sub_field( 'cta_label' ); ?></a>
				<?php } ?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	</div>
</section>

	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php

			if ( is_home() ) {
				get_template_part( 'parts/loop', 'archive-list' );
			} else {
				get_template_part( 'parts/loop', 'front-page' );
			}

			?>

		<?php endwhile; endif; ?>
	</main> <!-- end #main -->

<?php get_footer(); ?>