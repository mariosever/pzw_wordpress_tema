<?php /* Template Name: Blog page */ ?>

<?php get_header(); ?>

<div class="main" style="margin-bottom: 300px;">

	<h2>Blog</h2>

	<div class="blog-grid">

		<?php 
		
		$args = array( 'category_name' => 'blog', 
					   'posts_per_page' => 9 
					 ); 
		 
		$the_query = new WP_Query( $args ); 
		 
		if ( $the_query->have_posts() ) : 
		     
		    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		    	<?php $post_link = get_permalink(); ?>

		    	<div class="blog-post">

		    		<a href="<?php echo $post_link; ?>"><?php the_post_thumbnail(); ?></a>

		    		<a href="<?php echo $post_link; ?>"><h3><?php the_title(); ?></h3></a>

		    		<p><?php the_excerpt(); ?></p>
		 
					<p><a class="blog-gumb" href="<?php echo $post_link; ?>">Pročitaj više</a></p>

		    	</div>

		<?php endwhile; 
				else: 
				
				    _e( 'Sorry, nema objava u ovoj kategoriji.', 'textdomain' ); 
		endif; 
				 
		wp_reset_postdata(); 
		?>

	</div>

</div>

<?php get_footer(); ?>