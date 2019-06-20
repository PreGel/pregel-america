<?php get_header('blog'); ?>

<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- dev testing -->
	<div class="grid-x expanded collapse lt-gray">
		<div class="cell">
			<div class="large-article-header" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
			</div>
		</div>
	</div>
	<!-- end dev testing -->

	<div id="inner-content" class="grid-container">
		<div class="grid-x">

			<main id="main" class="large-8 medium-8 cell large-offset-2 medium-offset-2" role="main">

				<!-- <a class="button" href="/blog">PreGel Blog</a> -->
				<div class="article-date">
					<p>Published on <?php the_time('F j, Y') ?></p>
				</div>
				<h1><?php the_title(); ?></h1>
				<div class="article-author">
					<p>by <?php the_author_posts_link(); ?></p>
				</div>

				<?php get_template_part( 'parts/loop', 'single-blog' ); ?>

			<?php endwhile; else : ?>

			<?php get_template_part( 'parts/content', 'missing' ); ?>

		<?php endif; ?>

		<?php //joints_related_posts(); ?>

	</main> <!-- end #main -->

	<?php //get_sidebar(); ?>
</div>

</div> <!-- end #inner-content -->

</div> <!-- end #content -->
<script>
jQuery(document).ready(function($) {
	$(window).scroll(function() {
		var winTop = $(window).scrollTop();
		if (winTop >= 30) {
			$(".large-article-header").addClass("scrolled");
		} else{
			$(".large-article-header").removeClass("scrolled");
		}
	});
});
</script>

<?php get_footer(); ?>