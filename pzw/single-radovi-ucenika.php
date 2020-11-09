<?php
/*
 * Template Name: Radovi ucenika
 * Template Post Type: post
 */
  

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

                <div class="post-btns">

                    <?php if(get_previous_post_link('$format', '$link', true)) { ?>
                        <div class="prev-post">
                            <p>Prethodna objava:</p>
                            <?php echo previous_post_link('%link', '%title', true); ?>
                        </div>
                    <?php } ?>

                    <?php if(get_next_post_link('$format', '$link', true)) { ?>
                        <div class="next-post">
                            <p>Sljedeća objava:</p>
                            <?php echo next_post_link('%link', '%title', true); ?>
                        </div>
                    <?php } ?>

                </div>

            </div>       

        </div>

    <?php endwhile; ?>

<?php get_footer(); ?>