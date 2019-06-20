<?php
/*
Template Name: POP Kits (No Sidebar)
*/
?>
<?php get_header(); ?>

<div id="content-custom">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell">
				<div class="large-article-header" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
					<div class="large-article-header-content">
						<div class="center-container">
						<!-- <div class="article-title text-center">
							<h1><?php the_title(); ?></h1>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="grid-container">
	<div id="inner-content" class="grid-x">

		<main id="main" class="large-12 medium-12 cell" role="main">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

			<?php
			$args = array(
				'post_type' => 'popkit_type');

			$wp_query = new WP_Query( $args );

			if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


			<!-- To see additional archive styles, visit the /parts directory -->
			<?php get_template_part( 'parts/loop', 'archive-grid-popkit' ); ?>


		<?php endwhile; ?>	

		<?php joints_page_navi(); ?>

	<?php else : ?>

	<?php get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>

<!-- generic info form -->

<?php gravity_form( 14, true, false, false, '', false ); ?>

</main> <!-- end #main -->

<?php //get_sidebar(); ?>

</div> <!-- end #inner-content -->
</div>

</div> <!-- end #content -->

<?php get_footer(); ?>