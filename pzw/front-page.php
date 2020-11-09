<?php get_header(); ?>

	<div id="header">
		<h1 class="uvod-naslov">Širimo znanje o tehnologiji</h1>
	</div>

	<div class="ikone">
		<div class="oblacici">
			<div class="oblacici-content">
				<div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-dizajn.svg" class="boxup" alt="Web dizajn">
					<h3>Web dizajn</h3>
					<p>Dizajniramo i gradimo web budućnosti. Koristeći grafički dizajn i programiranje stvaramo moderne i atraktivne web stranice i aplikacije. </p>
				</div>
				<div class="box boxm">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/programiranje.svg" alt="Programiranje">
					<h3>Programiranje</h3>
					<p>Učimo kako pomoću računala možemo rješavati ljudske probleme. Usvajamo vještine problemskog i algoritamskog razmišljanja koje možemo primijeniti na bilo koju sferu života.</p>
				</div>
				<div class="box boxm">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nove-tehnologije.svg" alt="Nove tehnologije">
					<h3>Nove tehnologije</h3>
					<p>Istražujemo svijet kroz nove tehnologije i stalno učimo nove stvari. Pripremamo se za zanimanja budućnosti.</p>
				</div>
			</div>
		</div>
		<div class="oblacicid">
		</div>
	</div>

	<div class="main" style="margin-bottom: 100px;">

		<div class="radovi">

			<h2>Radovi</h2>	

			<?php 
				
				$radovi_args = array( 'category_name' => 'radovi-ucenika', 
							          'posts_per_page' => 3 
							        ); 
				 
				$radovi_query = new WP_Query( $radovi_args ); 
				 
				if ( $radovi_query->have_posts() ) :

					while ( $radovi_query->have_posts() ) : $radovi_query->the_post(); ?>
						
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

			<a href="<?php echo get_option('siteurl'); ?>/radovi-ucenika"><div class="gumb" style="margin-top: 0px;">Više</div></a>
		</div>

		<div class="blog-naslovna">
			<h2>Najnovije sa bloga</h2>
			<div class="blog-exp">

				<?php 
				
				$args = array( 'category_name' => 'blog', 
							   'posts_per_page' => 3 
							 ); 
				 
				$the_query = new WP_Query( $args ); 
				 
				if ( $the_query->have_posts() ) : 
				     
				    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				    	<?php $post_link = get_permalink(); ?>

				    	<div  class="blog-post">	

							<a href="<?php echo $post_link; ?>"><?php the_post_thumbnail(); ?></a>

							<a href="<?php echo $post_link; ?>"><h3><?php the_title(); ?></h3></a>

							<p><?php the_excerpt(); ?></p>

						</div>

					<?php endwhile; 
				else: 
				
				    _e( 'Sorry, nema objava u ovoj kategoriji.', 'textdomain' ); 
				endif; 
				 
				wp_reset_postdata(); 
				?>

			</div>
		</div>

		<a href="<?php echo get_option('siteurl'); ?>/blog"><div class="gumb"> Više</div></a>

	</div>

	<div class="o-nama">
		<div class="o-nama1"></div>
		<div class="o-nama2">
			<div class="o-nama-content">
				<h2>O nama</h2>
				<div class="tekstvideo">
					<div class="tekst">
					<p>Mi smo web dizajneri Škole za grafiku dizajn i medijsku produkciju u Zagrebu, dobro došli na naše web stranice!</p><br/>

					<p>Volimo dizajnirati, programirati i graditi web stranice i aplikacije. Učimo na stvarnim projektima i želimo svoje iskustvo podijeliti s drugima. Iz tog razloga su nastale ove stranice na kojima možete pratiti naš put prema tome da postanemo uspješni web dizajneri. Objavljujemo svoje radove i projekte, pišemo blog i dijelimo što smo naučili. </p><br/>

					<p>Zbog svestranosti našeg zanimanja i mnogih pojekata koje imamo u školi nikad nam nije dosadno.</p><br/>

					<p>Pridruži nam se, komentiraj i prati našu priču :-)</p><br/>
					</p>
					</div>

					<div class="video">
						<iframe width="514" height="360" src="https://www.youtube.com/embed/mvArT9cJjKM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>