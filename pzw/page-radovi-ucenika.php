<?php /* Template Name: Radovi */ ?>

<?php get_header(); ?>

<div class="main">

	<h2>Radovi učenika</h2>

	<div class="radovi-content">

		<?php 
		
		$args = array( 'category_name' => 'radovi-ucenika', 
					   'posts_per_page' => 9 
					 ); 
		 
		$the_query = new WP_Query( $args ); 
		 
		if ( $the_query->have_posts() ) : 
		     
		    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<a href="<?php echo get_permalink(); ?>">
					<div class="radovi-container">
						<?php the_post_thumbnail(); ?>
						<div class="radovi-overlay">
							<h3 class="radovi-tekst">O projektu</h3>
						</div>
					</div>
				</a>

				<div class="space"></div>

		<?php endwhile; 
		else: 
		    _e( 'Sorry, nema objava u ovoj kategoriji.', 'textdomain' ); 
		endif; 
				 
		wp_reset_postdata(); 
		
		?>

	</div>

</div>

<?php get_footer(); ?>