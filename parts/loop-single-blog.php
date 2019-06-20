<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
	<header class="article-header">	
		<!-- <h1 class="entry-title single-title" itemprop="headline"><?php //the_title(); ?></h1> -->
		<?php //get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<?php //the_post_thumbnail('full'); ?>
		<?php the_content(); ?>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<?php 
		global $wpdb;
		$l=0;
		$postid=get_the_id();
		$clientip=get_client_ip();
		$row1 = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid' AND clientip = '$clientip'");
		if(!empty($row1)){
		$l=1;
		}
		$totalrow1 = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid'");
		$total_like1 = $wpdb->num_rows;
		?>
        <div class="post-like-container">
        	<h5>Was this article helpful</h5>
		 <div class="post_like">
		  <a class="pp_like <?php if($l==1) {echo "liked"; } ?>" href="#" data-id="<?php echo get_the_id(); ?>"><i class="fas fa-thumbs-up"></i> 
		  	<span><?php echo $total_like1; ?> like</span>
		  	<i class="fi-dislike large"></i>
		  </a>
		  <div class="lds-facebook"></div>
		 </div>
        </div>
	</section> <!-- end article section -->
    


	<iframe src="https://go.pregelamericas.com/l/95432/2019-01-16/35zpnh" width="50%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>

    
						
	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->

	<?php joints_related_posts(); ?>								
	<?php comments_template(); ?>

	<script>
	jQuery(document).ready(function($) {


	jQuery('.pp_like').click(function(e){
	e.preventDefault();
	jQuery('.pp_like').hide();

	var postid=jQuery(this).data('id');
	//alert(postid);
	var data = {
	action: 'my_action',
	security : MyAjax.security,
	postid: postid
	};
	jQuery.post(MyAjax.ajaxurl, data, function(res) {
	var result=jQuery.parseJSON( res );
	console.log(result);
	//alert(res);
	var likes="";
	likes=result.likecount + " like";
	jQuery('.pp_like span').text(likes);
	if(result.like ==1){
	jQuery('.pp_like').addClass('liked');
	}
	if(result.dislike ==1){
	jQuery('.pp_like').removeClass('liked');
	} 
	jQuery('.pp_like').show();

	});
	});


	});
	</script>
													
</article> <!-- end article -->
