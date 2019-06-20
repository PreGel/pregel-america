<?php
/*
Template Name: Marketplace 
*/
?>
<?php get_header(); ?>
			
<div id="content">
 <div class="grid-x expanded lt-gray text-center">

      <h1 class="float-center"><?php the_title(); ?></h1>


          <div class="cell">
            <span>Categories: </span>
          	<?php get_sidebar('marketplace'); ?>
          	<?php
				$terms = get_terms( 'dlm_download_category' );
				foreach ( $terms as $term ) {
					echo "<h2>" . $term->name . "</h2>";
					$slug = $term->slug;
					echo do_shortcode( "[downloads category='$slug']" );
				}
				?>
          </div>
 </div>


 <div id="inner-content" class="grid-x">

	<main id="main" class="large-12 cell" role="main">

		<div class="small-12 large-12 cell">
			<div id="pg-about-section-one" class="grid-container">
				<div class="" id="pg-about-content-row">
				 <div class="large-12 cell">
					    <h2 class="float-center"><?php the_field('section_one_title'); ?></h2>
				 </div>
				 <div class="large-12 cell">
					<?php the_field('section_one_text'); ?>
				 </div>
				</div>
			</div>
					<!-- Content section 2 -->
			<div id="pg-about-section-two" class="alt-background-light-blue">
				<div class="grid-container">
				 <div class="grid-x" id="pg-about-content-row">
					<div class="large-12 cell">
					     <h2 class="float-center"><?php the_field('section_two_title'); ?></h2>
					</div>
					<div class="large-12 cell">
					     <?php the_field('section_two_text'); ?>
					</div>
				 </div>
				</div>
			</div>
		</div>

    </main> <!-- end #main -->

 </div> <!-- end #inner-content -->

 </div>


<?php get_footer(); ?>