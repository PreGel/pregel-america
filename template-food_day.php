<?php
/*
Template Name: Food Holidays (No Sidebar)
*/
?>
<?php get_header(); ?>

<div id="content">
	<div class="grid-x expanded lt-gray">
		<div class="cell">
			   <?php the_field('top_banner'); ?>	
		</div>
	</div>
	<div class="grid-container">
	<div class="grid-x">
		<div class="cell">
			   <h1><?php the_title(); ?></h1>
			   <p><?php the_field('intro_text'); ?></p>
		</div>
	</div>
</div>
	
	<div class="grid-container">
	<div id="inner-content" class="grid-x grid-margin-x">
		<!-- start january card --> 
		<?php if (get_field('display_jan') == 'yes'): ?>
		<div class="large-6 small-12 cell">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('january_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>January</h2>
						<p><?php the_field('january_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('january_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end january card -->
<!-- start february card --> 
		<?php if (get_field('display_feb') == 'yes'): ?>
		<div class="large-6 small-12 cell">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('february_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>February</h2>
						<p><?php the_field('february_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('february_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end february card -->
<!-- start march card --> 
		<?php if (get_field('display_mar') == 'yes'): ?>
		<div class="large-6 small-12 cell">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('march_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>March</h2>
						<p><?php the_field('march_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('march_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end march card -->
<!-- start april card --> 
		<?php if (get_field('display_apr') == 'yes'): ?>
		<div class="large-6 small-12 cell">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('april_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>April</h2>
						<p><?php the_field('april_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('april_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end april card -->
<!-- start may card --> 
		<?php if (get_field('display_may') == 'yes'): ?>
		<div class="large-6 small-12 cell end"> <!-- remove end class when next month is activated -->
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('may_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>May</h2>
						<p><?php the_field('may_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('may_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end may card -->
<!-- start june card --> 
		<?php if (get_field('display_jun') == 'yes'): ?>
		<div class="large-6 small-12 cell">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('june_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>June</h2>
						<p><?php the_field('june_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('june_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end june card -->
<!-- start july card --> 
		<?php if (get_field('display_jul') == 'yes'): ?>
		<div class="large-6 small-12 cell">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('july_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>July</h2>
						<p><?php the_field('july_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('july_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end july card -->
<!-- start august card --> 
		<?php if (get_field('display_aug') == 'yes'): ?>
		<div class="large-6 small-12 cell">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('august_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>August</h2>
						<p><?php the_field('august_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('august_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end august card -->
<!-- start september card --> 
		<?php if (get_field('display_sep') == 'yes'): ?>
		<div class="large-6 small-12 cell">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('september_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>September</h2>
						<p><?php the_field('september_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('september_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end september card -->
<!-- start october card --> 
		<?php if (get_field('display_oct') == 'yes'): ?>
		<div class="large-6 small-12 cell">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('october_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>October</h2>
						<p><?php the_field('october_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('october_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end october card -->
<!-- start november card --> 
		<?php if (get_field('display_nov') == 'yes'): ?>
		<div class="large-6 small-12 cell">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('november_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>November</h2>
						<p><?php the_field('november_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('november_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end november card -->
<!-- start december card --> 
		<?php if (get_field('display_dec') == 'yes'): ?>
		<div class="large-6 small-12 cell">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('december_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>December</h2>
						<p><?php the_field('december_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('december_holidays') ): the_row(); ?>
						<div class="grid-x">
							<div class="large-9 cell">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 cell">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end december card -->


<!-- end #main -->

</div> <!-- end #inner-content -->
</div>

</div> <!-- end #content -->
<script>
// more click
jQuery('.card-profile-stats-more-link').click(function(e){
	e.preventDefault();
	/*if ( jQuery(".card-profile-stats-more-content").is(':hidden') ) {
		jQuery(this).removeClass('panel-closed').addClass('panel-open');
	} else {
		jQuery(this).removeClass('panel-open').addClass('panel-closed');
	}*/
	jQuery(this).next('.card-profile-stats-more-content').slideToggle('slow', function(){
		jQuery(this).parent().find('.card-profile-stats-more-link').toggleClass('panel-open panel-closed');
	});
	//});
});
</script>

<?php get_footer(); ?>