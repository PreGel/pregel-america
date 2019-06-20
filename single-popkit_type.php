<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- dev testing -->
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell">
				<div class="large-article-header" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
					<div class="large-article-header-content">
					<!-- <div class="center-container">
						<a class="button hollow white" href="/pop-kits">Back to all POP Kits</a>
						<div class="article-title">
							<h1><?php the_title(); ?></h1>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end dev testing -->
<div class="grid-container">

	<div id="inner-content" class="grid-x">
		<!-- <div class="grid-x"> -->
			<div class="cell text-center">
				<a class="button hollow white" href="/pop-kits">Back to all POP Kits</a>
			</div>
		<!-- </div> -->

		<main id="main" class="large-12 medium-12 cell" role="main">

			<?php //get_template_part( 'parts/loop', 'single-blog' ); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="entry-content" itemprop="articleBody">
					<div class="grid-container">
					<div class="grid-x">
						<div class="large-12 cell">
							<h1><?php the_title(); ?></h1>
							<?php //the_post_thumbnail('full'); ?>
							<?php //the_content(); ?>
							<p><?php the_field('description'); ?></p>
							<p>Product Code: <?php the_field('popkit_code'); ?></p>
						</div>
					</div>
				</div>
				<div class="grid-container">
					<div class="grid-x">
						<?php $image = get_field('kit_image'); ?>
						<div class="large-6 cell">
							<p><?php the_field('kit_contents'); ?></p>
						</div>
						<div class="large-6 cell">
							<div class="section-img">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>
						</div>
					</div>
				</div>

					<div class="order-form">	
						<?php the_field('order_form'); ?>
					</div>
    				<div class="grid-container">
					<div class="grid-x">
						<div class="large-12 cell">	
							<?php the_field('additional_info'); ?>
						</div>
					</div>
				</div>


				</section> <!-- end article section -->

			</article> <!-- end article -->

		<?php endwhile; else : ?>
		
		<?php get_template_part( 'parts/content', 'missing' ); ?>

	<?php endif; ?>

	<?php //joints_related_posts(); ?>

</main> <!-- end #main -->

<?php //get_sidebar(); ?>

</div> <!-- end #inner-content -->
</div>

</div> <!-- end #content -->

<?php get_footer(); ?>