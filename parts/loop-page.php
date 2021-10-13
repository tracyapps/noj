<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<section class="page-content-container">
		<header class="page-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header> <!-- end page header -->

		<section class="page-content" itemprop="articleBody">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</section> <!-- end article section -->

		<footer class="page-footer">

		</footer> <!-- end page footer -->
	</section>


</article> <!-- end article -->