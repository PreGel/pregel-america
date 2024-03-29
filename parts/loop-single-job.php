<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="large-12">				
	<header class="article-header">	
		<h1 itemprop="title" class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content'); ?>
    </header> <!-- end article header -->
	</div>	
	<div class="large-8 medium-10 small-10">				
    <section class="entry-content" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->
	</div>				
	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->
									
	<?php comments_template(); ?>	
													
</article> <!-- end article -->

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
		
		
    
	<div class="large-8 medium-10 small-10">				
    <section class="entry-content" itemprop="articleBody">
    <h2 itemprop="title"><?php the_field('jobs_title'); ?></h2>
    <h3 itemprop="hiringOrganization"><?php the_field('company_title'); ?></h3>
    <span itemprop="jobLocation" itemscope itemtype="http://schema.org/Place"><p><?php the_field('job_address'); ?></p></span>
    <p itemprop="datePosted"><?php the_field('job_date_posted'); ?></p>
    <?php the_field('job_description'); ?>
    <p>Submit your resume via email at <a href="mailto:careers@pregelamerica.com">careers@pregelamerica.com</a></p>

	</section> <!-- end article section -->
	</div>				
													
</article> <!-- end article -->





