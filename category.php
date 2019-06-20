<?php get_header('blog'); ?>

<div class="row expanded collapse">
		<div class="column">
			<div class="large-article-header overlay" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
				<div class="large-article-header-content">
					<div class="center-container">
						<a class="button hollow white" href="/blog">PreGel Blog</a>
						<div class="article-title">
							<h1><?php the_archive_title();?></h1>
						</div>
						<div class="article-details">
							<div class="article-author">
								<p><?php the_archive_description();?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
			
	<div id="archive-content">
	
		<div id="inner-content" class="row">
		
		    <main id="main" class="large-12 medium-12 columns" role="main">
			    
		    	<!-- <header>
		    		<h1 class="page-title"><?php the_archive_title();?></h1>
					<?php //the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header> -->
		
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-grid-blog' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	
			<?php //get_sidebar(); ?>
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>