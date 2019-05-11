<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header();
?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            <article <?php post_class(); ?>>
                <div class="homepage-content">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						the_content();

					endwhile; // End of the loop.
					?>
                    <hr/>
                    <div class="clients">
		                <?php $the_query = new WP_Query( array( 'page_id' => 19 ) );
		                if ( $the_query->have_posts() ) :
			                while ( $the_query->have_posts() ) : $the_query->the_post();
				                ?>
                                <h4><?php the_title() ?></h4>
				                <?php
				                the_content();

			                endwhile;
			                wp_reset_postdata(); ?>
		                <?php endif; ?>
                    </div>
                </div>

            </article>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
