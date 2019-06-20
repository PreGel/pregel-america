<?php 
// Adjust the amount of rows in the grid
$grid_columns = 3; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="grid-x archive-grid" data-equalizer> <!--Begin Row:--> 

<?php endif; ?> 

		<!--Item: -->
		<div class="large-4 medium-6 small-12 cell panel" data-equalizer-watch>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
			
				<section id="archive-grid-featured-image" class="featured-image" itemprop="articleBody">
					<?php //$image = get_field('kit_image'); ?>
					<!-- <img src="<?php //echo $image['url']; ?>" alt="<?php //echo $image['alt']; ?>" /> -->
					<img src="<?php the_post_thumbnail_url('full'); ?>" alt="pop kit display"/>
				</section> <!-- end article section -->
			
				<header class="article-header">
					<h4 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>	
					<?php //get_template_part( 'parts/content', 'byline'); ?>				
				</header> <!-- end article header -->	
								
				<section class="entry-content" itemprop="articleBody">
					<p><?php the_field('description'); ?></p>
					<?php //the_excerpt(); ?>
				</section> <!-- end article section -->
								    							
			</article> <!-- end article -->
			<p class="grid-btn"><a href="<?php the_permalink(); ?>"class="button hollow">View Kit</a></p> 
		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Row: --> 

<?php endif; ?>

