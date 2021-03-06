<?php get_header(); ?>

<?php do_action('FFW_slider_full', array(
	'id'       => 'slider_full_header',
	'class'    => 'slider-full',
	'category' => 'home'
)); ?>

<div id="main" class="default blog">
	<div class="container">
	<h2 class="section-title">From The Blog</h2>
		<div id="sidebar-default" class="sidebar collapsable collapsed <?php sidebar_position_class(); ?>">
		    <div id="sidebar-toggle"></div>
		    <?php get_sidebar(); ?>
	  	</div><!-- #sidebar -->

		<div id="content " class="push-<?php sidebar_position_class(); ?>">
			<div class="content-inner">
				<?php 
				$args = array(
					'nopaging'	=> true
					);
				query_posts($args);
				?>
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop/loop', get_post_format() ); ?>

				<?php endwhile; endif; wp_reset_postdata(); ?>		

				<?php do_action('FFW_pagination', array( 'id' => 'nav-below', 'class' => 'center' ) ); ?>
			</div>
		</div><!-- .content -->
	</div> <!-- .container -->
</div> <!-- #main -->


<?php get_footer(); ?>