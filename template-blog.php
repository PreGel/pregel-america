<?php
/*
Template Name: Blog (No Sidebar) 2-21-19
*/
?>

<?php get_header('blog'); ?>

<div class="grid-x expanded collapse show-for-large lt-gray">
	<div class="cell">

		<div class="orbit" role="region" aria-label="Featured Blog Posts" data-orbit>
			<div class="orbit-wrapper">
				<div class="orbit-controls">
					<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
					<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
				</div>
				<ul class="orbit-container">	
					<?php
					$args = array(
						'post_type' => 'post',
							//feature in slider
						'category_name' => 'featured',
							//max number to feature
						'posts_per_page' => 5);

					$pg_header_query = new WP_Query( $args );

					while ($pg_header_query->have_posts()) : $pg_header_query->the_post(); ?>
					<li class="is-active orbit-slide">
						<div class="large-article-header overlay" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
							<div class="large-article-header-content">
								<div class="center-container">
									<div class="article-date">
										<p>Published on <?php the_time('F j, Y') ?></p>
									</div>
									<div class="article-title">
										<h1><?php the_title(); ?></h1>
									</div>
									<div class="article-details">
										<!-- hide author info for now -->
										<!-- <div class="article-author">
											<img src="https://unsplash.it/50/50?image=1005" alt="" />
											<?php the_author_posts_link(); ?>
										</div> -->
							<!-- <div class="article-comments">
								<a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 3 Comments</a>
							</div> -->
							<a class="button hollow white" href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</li>
		
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</ul>
</div>
<nav class="orbit-bullets">
	<button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
	<button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
	<button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
</nav>
</div>
</div>
</div>

<div id="content">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<div class="lt-gray text-center show-for-large">
		<span>Categories: </span>
		<div class="cell">
			<?php 
			$categories = get_categories( array(
				'orderby' => 'name',
				'parent'  => 0,
				'exclude' => '81'
				) );

			// foreach ( $categories as $category ) {
			// 	printf('<div class="large-3 columns">');
			// 	printf( '<a class="button" href="%1$s">%2$s</a>',
			// 		esc_url( get_category_link( $category->term_id ) ),
			// 		esc_html( $category->name )
			// 		);
			// 	printf( '<p>%1$s</p>',
			// 		esc_html( $category->description )
			// 		);
			// 	printf('</div>');

			// 		}

			foreach ( $categories as $category ) {
				printf( '<a href="%1$s" class="button blog-cat" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="%3$s" data-position="bottom" data-alignment="center">%2$s</a>',
					esc_url( get_category_link( $category->term_id ) ),
					esc_html( $category->name ),
					esc_html( $category->description )
					);

			}
			?>
		</div>
	</div> <!-- end row -->
	<!-- <div class="grid-container"> -->
	<div id="inner-content" class="grid-x">
		<main id="main" class="large-12 cell" role="main">

			<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 12,
				'paged' => $paged);

			$wp_query = new WP_Query( $args );

			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			<?php get_template_part( 'parts/loop', 'archive-grid-blog' ); ?>

<?php endwhile; ?>

<div class="cell text-center">
	<?php joints_page_navi(); ?>
</div>


</main> <!-- end #main -->

</div> <!-- end #inner-content -->
<!-- </div> -->

</div> <!-- end #content -->
<?php wp_reset_postdata(); ?>

<?php get_footer('alt'); ?>