

<?php get_header(); ?>



<div id="main" class="page page-default default">
	<div class="container">
		<div id="sidebar-default" class="sidebar collapsable collapsed <?php sidebar_position_class(); ?>">
		  <div id="sidebar-toggle"></div>
		  <?php get_sidebar( get_post_type() ); ?>
		</div><!-- #sidebar -->
    
	    <div id="content" class="push-<?php sidebar_position_class(); ?>">

	      <div class="content-inner">
	        
	        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	          <?php get_template_part( 'loop/loop', get_post_type() ); ?>
	        <?php endwhile; endif; ?>

	      </div><!-- .content-inner -->
	    </div><!-- #content -->
	</div><!-- .container -->
</div><!-- #main -->

<?php get_footer(); ?>