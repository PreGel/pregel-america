<?php
/*
Template Name: Media Kit (No Sidebar)
*/
?>
<?php get_header(); ?>

<div id="content">
	<div class="grid-x expanded leaf-bg">
		<div class="cell large-4 large-offset-4 text-center">
     <!-- top video -->
     <div class="responsive-embed panorama">
       <iframe width="560" height="315" src="https://www.youtube.com/embed/CHP4icsFYVI?modestbranding=1&amp;rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
     </div>
   </div>
 </div>
 <div class="lt-gray">
  <div class="grid-container">
 <div class="grid-x">
  <div class="cell">


    <!-- testimonials -->
    <div class="orbit pgmk-testimonial" role="region" aria-label="PreGel Testimonials" data-orbit>
      <div class="orbit-wrapper">
        <!-- <div class="orbit-controls">
          <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
          <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        </div> -->
        <ul class="orbit-container">
          <li class="is-active orbit-slide">
            <div>
              <p class="pgmk-testimonialtext text-center">Excellent class. Chef Michael Laiskonis was informative, answered all of our questions, and gave us alternatives to problems. <br>He made it real for real world situations.</p>
              <p class="pgmk-testimonialname text-right"> - Carlton Harrison, pastry chef, Westminster-Canterbury on Chesapeake Bay</p>
            </div>
          </li>
          <li class="orbit-slide">
            <div>
              <p class="pgmk-testimonialtext text-center">I didn’t know that we have such a facility as PreGel that has so many classes that it offers… <br>It’s a once in a lifetime experience. I hope I can do it again.</p>
              <p class="pgmk-testimonialname text-right"> - Maria Saragusa, pastry student, Ukraine</p>
            </div>
          </li>
          <li class="orbit-slide">
            <div>
              <p class="pgmk-testimonialtext text-center">Chef Laiskonis is an excellent teacher with an in-depth knowledge of the interaction of ingredients. <br>Superior instruction bolstered by a state-of-the-art facility made for a tremendous class. Thank you.</p>
              <p class="pgmk-testimonialname text-right"> - Raymond Blanchard, pastry sous chef, The Everglades Club</p>
            </div>
          </li>
          <li class="orbit-slide">
            <div>
              <p class="pgmk-testimonialtext text-center">This was my first experience with PreGel classes, and I am floored by how much I have learned! I really enjoyed all the lecture information and the demos were very cool to get to see first-hand. Being able to learn from such a talented and experienced chef is so inspiring. <br/>Thank you for this opportunity and I cant wait to come back.</p>
              <p class="pgmk-testimonialname text-right"> - Melissa Attanas, baking instructor, Wake Tech Community College. 5-Star Pastry Series/ All Things Chocolate: Bean to Dessert with Chef Michael Laiskonis</p>
            </div>
          </li>
          <li class="orbit-slide">
            <div>
              <p class="pgmk-testimonialtext text-center">I have loved being in the PreGel facilities and the staff is just world-class…they are so professional, so knowledgeable, and so welcoming. <br>I would most certainly recommend PreGel for culinary training. 
There’s no other learning experience like this.
</p>
              <p class="pgmk-testimonialname text-right"> - Kara Andretta, Kara’s Couture Cakes, Buffalo, NY</p>
            </div>
          </li>
           <li class="orbit-slide">
            <div>
              <p class="pgmk-testimonialtext text-center">Thank you so much. I'm glad I took the class. Chef Michael Laiskonis is a great teacher and nice chef. <br>Loved to see the many PreGel products used in this class.</p>
              <p class="pgmk-testimonialname text-right"> - Carlos Sierra</p>
            </div>
          </li>
          <li class="orbit-slide">
            <div>
              <p class="pgmk-testimonialtext text-center">The facility is great, the equipment they have here is incredible. The staff is amazing. <br>I’ve been telling my friends about it and that they should totally do it. 
</p>
              <p class="pgmk-testimonialname text-right"> - Sofia Tejeda, Feast, San Antonio</p>
            </div>
          </li>
          <li class="orbit-slide">
            <div>
              <p class="pgmk-testimonialtext text-center">Chef Laiskonis has a wealth of knowledge that he shared with us, it is evident that his skills are very refined. <br>This is my third class at PreGel and this is by far the 'best one yet.'</p>
              <p class="pgmk-testimonialname text-right"> - Todd Richter, executive pastry chef, Prestonwood Country Club</p>
            </div>
          </li>
          <li class="orbit-slide">
            <div>
              <p class="pgmk-testimonialtext text-center">It’s a different format from other classes that I’ve taken and there’s a tremendous amount of learning going on. <br>I’ll be looking ahead to see what other courses you have here. </p>
              <p class="pgmk-testimonialname text-right"> - Katherine Parsi, culinary arts teacher</p>
            </div>
          </li>
        </ul>
      </div>
      <nav class="orbit-bullets">
        <button class="is-active" data-slide="0"><span class="show-for-sr">First testimonial</span><span class="show-for-sr">Current Slide</span></button>
        <button data-slide="1"><span class="show-for-sr">Second testimonial</span></button>
        <button data-slide="2"><span class="show-for-sr">Third testimonial</span></button>
        <button data-slide="3"><span class="show-for-sr">Fourth testimonial</span></button>
         <button data-slide="4"><span class="show-for-sr">Fifth testimonial</span></button>
          <button data-slide="5"><span class="show-for-sr">Sixth testimonial</span></button>
           <button data-slide="6"><span class="show-for-sr">Seventh testimonial</span></button>
            <button data-slide="7"><span class="show-for-sr">Eighth testimonial</span></button>
             <button data-slide="8"><span class="show-for-sr">Ninth testimonial</span></button>
      </nav>
    </div>
    <!-- end testimonials-->

  </div>
</div>
</div>
</div>

<div id="inner-content" class="grid-container">
  <div class="grid-x">
    <div class="cell text-center">
    <?php $contact_email = get_field('contact_email'); ?>
    <a class="button large" href="mailto:<?php echo $contact_email ?>">Press and Media Contact</a>
  </div>
  </div>


<div class="grid-x">
  <!-- start tabs -->
  <ul class="tabs" data-deep-link="true" data-update-history="true" data-deep-link-smudge="true" data-deep-link-smudge-delay="500" data-tabs id="deeplinked-tabs">
    <li class="tabs-title is-active"><a href="#panel1d" aria-selected="true"><?php the_field('tab_one_title'); ?></a></li><!-- History and About -->
    <li class="tabs-title"><a href="#panel2d"><?php the_field('tab_two_title'); ?></a></li><!-- Product Lines -->
    <li class="tabs-title"><a href="#panel3d"><?php the_field('tab_three_title'); ?></a></li><!-- Training Centers -->
    <!--  <li class="tabs-title"><a href="#panel4d"><?php //the_field('tab_four_title'); ?></a></li>  hold media tab for now-->
    <li class="tabs-title"><a href="#panel5d"><?php the_field('tab_five_title'); ?></a></li><!-- Press and Media -->
    <li class="tabs-title"><a href="#panel6d"><?php the_field('tab_six_title'); ?></a></li><!-- Images -->
    <li class="tabs-title"><a href="#panel7d"><?php the_field('tab_seven_title'); ?></a></li><!-- Logos -->
    <li class="tabs-title"><a href="#panel8d"><?php the_field('tab_eight_title'); ?></a></li><!-- Videos -->
    <li class="tabs-title"><a href="#panel9d"><?php the_field('tab_nine_title'); ?></a></li><!-- Resources -->
    <li class="tabs-title"><a href="#panel10d"><?php the_field('tab_ten_title'); ?></a></li><!-- Team -->
    <li class="tabs-title"><a href="#panel11d"><?php the_field('tab_eleven_title'); ?></a></li><!-- Contacts -->
  </ul>
</div>

  <div class="tabs-content" data-tabs-content="deeplinked-tabs">

    <div class="tabs-panel is-active" id="panel1d"><!-- History and About -->
      <p><?php the_field('tab_one_content'); ?></p>
    </div>

    <div class="tabs-panel" id="panel2d"><!-- Product Lines -->
      <p><?php the_field('tab_two_content'); ?></p>
    </div>

    <div class="tabs-panel" id="panel3d"><!-- Training Centers -->
     <p><?php the_field('tab_three_content'); ?></p>
   </div>

     <!-- media tab - hold for now <div class="tabs-panel" id="panel4d">
       <?php

$post_objects //= //get_field('tab_four_content');

//if( $post_objects ): ?>
<div class="grid-x">
  <?php //foreach( $post_objects as $post):?>
  <?php setup_postdata($post); ?>
  <div class="medium-6 large-6 cell">
    <div class="card-info success">
     
      <div class="card-info-content">
       <h3 class="lead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
       <?php //echo wp_trim_words( get_the_content(), 40, '...' ); ?>
     </div>
   </div>
 </div>
<?php //endforeach; ?>
<?php wp_reset_postdata();?>
</div>
<?php //endif; ?>
</div> -->


<div class="tabs-panel" id="panel5d"> <!-- Press and Media -->
  <div class="grid-x"><!-- Press -->
    <div class="large-3 cell"><h2>Latest Press Releases</h2><a class="button" href="https://pregelamerica.com/news/press-release/">View all</a></div>
    <div class="large-9 cell">
      <?php

      $post_objects = get_field('tab_five_content');

      if( $post_objects ): ?>
      <div class="grid-x">
        <?php foreach( $post_objects as $post): ?>
        <?php setup_postdata($post); ?>
        <div class="medium-6 large-6 cell">
          <div class="card-info">
            <div class="card-info-content">
             <h3 class="lead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
             <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
             <a href="<?php the_permalink(); ?>">Read More</a>
           </div>
         </div>
       </div>
     <?php endforeach; ?>
     <?php wp_reset_postdata();?>
   </div>
 <?php endif; ?>
</div>
</div>
<hr> <!-- moving media tab here for now -->
<div class="grid-x"><!-- Media -->
  <div class="large-3 cell">
    <h2>Media Presence</h2>
  </div>
  <div class="large-9 cell"> 
    <?php the_field('tab_four_content'); ?>
  </div>
</div> 
</div> <!-- /tab 5 -->
<div class="tabs-panel" id="panel6d"> <!-- Images -->
  <div class="grid-x">
    <div class="large-3 cell">
      <p><?php the_field('tab_six_content'); ?></p>
    </div>
    <div class="large-9 cell">
      <div class="featured-image-block-grid">
<!--  
image categories
gelato : Gelato
softserve : Soft Serve
pastryconfection : Pastry & Confection
frozenpops : Frozen Pops
icecream : Ice Cream
drinks : Drinks
savory : Savory
paninigelato : Panini Gelato
boxrecipes : Out of the Box Recipes
packaging : Packaging
itc : ITC
facility : Facility
events : Events
-->
<div class="button-group round">
  <button class="button hollow filter-simple-button is-active" data-filter="all">All</button>
  <button class="button hollow filter-simple-button" data-filter="gelato">Gelato</button>
  <button class="button hollow filter-simple-button" data-filter="softserve">Soft Serve</button>
  <button class="button hollow filter-simple-button" data-filter="pastryconfection">Pastry &amp; Confection</button>
  <button class="button hollow filter-simple-button" data-filter="frozenpops">Frozen Pops</button>
  <button class="button hollow filter-simple-button" data-filter="drinks">Drinks</button>
  <button class="button hollow filter-simple-button" data-filter="savory">Savory</button>
  <button class="button hollow filter-simple-button" data-filter="paninigelato">Panini Gelato</button>
  <button class="button hollow filter-simple-button" data-filter="boxrecipes">Out of the Box Recipes</button>
  <!-- <button class="button hollow filter-simple-button" data-filter="packaging">Packaging</button> -->
 <!--  <button class="button hollow filter-simple-button" data-filter="itc">ITC</button> -->
  <!-- <button class="button hollow filter-simple-button" data-filter="facility">Facility</button> -->
  <!-- <button class="button hollow filter-simple-button" data-filter="events">Events</button> -->
</div>    
<!-- image grid -->
<?php if( have_rows('downloadable_image') ): ?>

  <div class="grid-x large-up-4 small-up-2">
    <?php while( have_rows('downloadable_image') ): the_row();
    $image = get_sub_field('image_file');
    // thumbnail
  $size = 'thumbnail';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];

    $img_desc = get_sub_field('image_description');
    $link = get_sub_field('image_high_res_link');
    $image_category = get_sub_field_object('image_category');
    $image_cat_value = $image_category['value'];
    ?>
    <div class="featured-image-block cell cell-block filter-simple-item <?php echo $image_cat_value ?> text-center">
     <!-- <img src="<?php //echo $image['url']; ?>" alt="<?php //echo $image['alt'] ?>" /> -->
     <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
     <p class="featured-image-block-title"> <?php echo $img_desc; ?></p>
     <div><a class="button hollow" href="<?php echo $link; ?>">Download Print Image</a></div>
   </div>
 <?php endwhile; ?>
</div>
<?php endif; ?>

</div> <!-- end featured-image-block-grid -->
</div>
</div>
</div> <!-- end images tab -->

<div class="tabs-panel" id="panel7d"> <!-- Logos -->
 <div class="grid-x">
  <div class="large-3 cell">
    <p><?php the_field('tab_seven_content'); ?></p>
  </div>
  <div class="large-9 cell">
    <div class="featured-image-block-grid">
      <!-- image grid -->
      <?php if( have_rows('downloadable_logo') ): ?>
      <div class="grid-x large-up-4 small-up-2">
        <?php while( have_rows('downloadable_logo') ): the_row(); 
    // vars
        $lg_image = get_sub_field('logo_file');
        $lg_img_desc = get_sub_field('logo_description');
        $lg_link_print = get_sub_field('logo_link_print');
        $lg_link_web = get_sub_field('logo_link_web');
        $lg_link_eps = get_sub_field('logo_link_eps');
        ?>
        <div class="featured-image-block cell">
         <img src="<?php echo $lg_image['url']; ?>" alt="<?php echo $lg_image['alt'] ?>" />
         <p class="text-center featured-image-block-title"> <?php echo $lg_img_desc; ?></p>
         <div class="text-center">
          <?php if( !empty($lg_link_web) ): ?><a class="button hollow" href="<?php echo $lg_link_web; ?>">Download Web File</a><?php endif; ?>
          <?php if( !empty($lg_link_print) ): ?><a class="button hollow" href="<?php echo $lg_link_print; ?>">Download Print JPG File</a><?php endif; ?>
          <?php if( !empty($lg_link_eps) ): ?><a class="button hollow" href="<?php echo $lg_link_eps; ?>">Download Print EPS File</a><?php endif; ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
<?php endif; ?>
</div>
</div>
</div>
</div>
<div class="tabs-panel" id="panel8d"> <!-- Videos -->
 <div class="grid-x">
  <div class="large-3 cell">
    <p><?php the_field('tab_eight_content'); ?></p>
  </div>
  <div class="large-9 cell">
    <div class="featured-image-block-grid">
      <!-- video grid -->
      <?php if( have_rows('video') ): ?>
      <div class="grid-x large-up-12 small-up-12">
        <?php while( have_rows('video') ): the_row(); 
    // vars
        //$vid_tn = get_sub_field('video_thumbnail');
        $vid_desc = get_sub_field('video_description');
    //$vid = get_sub_field('video_embed');
        ?>
        <div class="featured-image-block cell">
         <!--  <img src="<?php //echo $vid_tn['url']; ?>" alt="<?php //echo $vid_tn['alt'] ?>" /> -->
         <!--  <p class="text-center featured-image-block-title">Download</p> -->
         <div class="embed-container">
          <?php
// get iframe HTML
          $iframe = get_sub_field('video_embed');
// use preg_match to find iframe src
          preg_match('/src="(.+?)"/', $iframe, $matches);
          $src = $matches[1];
// add extra params to iframe src
          $params = array(
            'rel'   => 0,
            'showinfo' =>0,
            'controls'    => 1
              //'hd'        => 1,
              //'autohide'    => 1
            );
          $new_src = add_query_arg($params, $src);

          $iframe = str_replace($src, $new_src, $iframe);
// add extra attributes to iframe html
          $attributes = 'frameborder="0"';

          $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
// echo $iframe
          echo $iframe;

          ?>
        </div>
        <p class="featured-image-block-title"><?php echo $vid_desc; ?></p>
      </div>
    <?php endwhile; ?>
  </div>
<?php endif; ?>
</div>
</div>
</div>
</div>
<div class="tabs-panel" id="panel9d"> <!-- Resources -->
 <p><?php the_field('tab_nine_content'); ?></p>
</div>
<div class="tabs-panel" id="panel10d"> <!-- Team -->
 <div class="grid-x">
  <div class="large-3 cell">
    <p><?php the_field('tab_ten_content'); ?></p>
  </div>
  <div class="large-9 cell">
    <div class="featured-image-block-grid">
      <!-- image grid -->
      <?php if( have_rows('team_image') ): ?>
      <div class="grid-x grid-margin-x large-up-4 small-up-2">
        <?php while( have_rows('team_image') ): the_row(); 
    // vars
        $team_image = get_sub_field('team_image_file');
        // thumbnail
  $team_size = 'thumbnail';
  $team_thumb = $team_image['sizes'][ $team_size ];
  $team_width = $team_image['sizes'][ $team_size . '-width' ];
  $team_height = $team_image['sizes'][ $team_size . '-height' ];
        $team_img_name = get_sub_field('team_image_name');
        $team_img_title = get_sub_field('team_image_title');
        $team_link = get_sub_field('team_image_high_res_link');
        ?>
        <div class="featured-image-block cell text-center">
           <!-- <img src="<?php //echo $team_image['url']; ?>" alt="<?php //echo $team_image['alt'] ?>" /> -->
            <img src="<?php echo $team_thumb; ?>" alt="<?php echo $team_image['alt'] ?>" width="<?php echo $team_width; ?>" height="<?php echo $team_height; ?>" />
           <p> <?php echo $team_img_name; ?></p>
           <p class="team_title"><strong><?php echo $team_img_title; ?></strong></p>
           <div><a class="button hollow" href="<?php echo $team_link; ?>">Download Image</a></div>
       </div>
     <?php endwhile; ?>
   </div>
 <?php endif; ?>
</div>
</div>
</div>
</div>
<div class="tabs-panel" id="panel11d"> <!-- Contacts -->
 <p><?php the_field('tab_eleven_content'); ?></p>
</div>
</div>
<!-- end tabs -->
<!-- end #main -->
</div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>
<script>
// shows and hides filtered items
jQuery(".filter-simple-button").click(function() {
  var value = jQuery(this).attr('data-filter');
  if(value === "all") {
    jQuery('.filter-simple-item').show('1000');
  } else {
    jQuery(".filter-simple-item").not('.'+value).hide('3000');
    jQuery('.filter-simple-item').filter('.'+value).show('3000');
  }
});
// changes active class on filter buttons
jQuery('.filter-simple-button').click(function () {
  jQuery(this).siblings().removeClass('is-active');
  jQuery(this).addClass('is-active');
});
</script>
