<style>
	.portfolio h3{
		text-align: center;
	}
</style>
<?php 

$posts = get_sub_field('portfolio_items');
 
if( $posts ): ?>
	
	<section class="portfolio" style="width:100%; background:#333; color:#fff;">
		<div class="container">
			<h1>Our Portfolio</h1>
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			<?php setup_postdata($post); ?>
			<div class="span4">
				<img src="http://placehold.it/304x200&text=<?php the_title(); ?>" />
				<h3><?php the_title(); ?></h3>
			</div>
		<?php endforeach; wp_reset_postdata(); ?>
		</div>
	</section>
<?php else :  ?>

	<section class="staff" style="width:100%; background:#333; color:#fff; background-image: url(http://energy.dev/wp-content/uploads/2013/09/reagan_work_marcus_price.jpeg);">
		<div class="container">
			<h1>Our Portfolio</h1>
			<div class="span4">
				<p>No portfolio items added yet.</p>
			</div>
		</div>
	</section>
	
<?php endif; ?>