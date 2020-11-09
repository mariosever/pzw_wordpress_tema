<?php /* single post */

get_header(); 

    // Start the single post loop.
    while ( have_posts() ) : the_post(); ?>

        <div class="main">
            <div class="post-intro">
                <h2><?php the_title(); ?></h2>
                <p><?php the_author(); ?> | <span class="post-data"><?php echo get_the_date(); ?></span></p>
                
            </div>

            <div class="post-content">

                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                ?>

                <?php  the_content(); ?>

            </div>       

        </div>

    <?php endwhile; ?>

<?php get_footer(); ?>