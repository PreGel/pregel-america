<div id="sidebar-marketplace">

	<?php if ( is_active_sidebar( 'marketplace' ) ) : ?>

		<?php dynamic_sidebar( 'marketplace' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>

</div>