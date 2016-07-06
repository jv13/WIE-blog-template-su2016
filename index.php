<!-- BEGIN HEADER -->
  <?php get_header(); ?>
<!-- END HEADER -->

    <!-- BEGIN SECTION CONTAINER -->
<div class="container">


            <?php dynamic_sidebar('first-widget'); ?>


        <section class="row">
          <div class="twelve columns">



                <!-- BEGIN LOOP -->
                <?php
                  if ( have_posts() ) {
                    while ( have_posts() ) {
                      the_post(); ?>


                      <div class="four columns">

                          <a href="<?php the_permalink(); ?>"><?php

                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('medium');
                            }
                          ?></a>

                          <h4 class="postdate"><?php the_time('F j, Y'); ?> </h4>

                          <h3 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                          <h4 class="posttags"><?php the_tags(); ?></h4>


                      </div>


                  <?php
                    } // end while

                  } // end if
                ?>


                  <!-- End LOOP -->

                  <!-- Load More Buton Code -->
                  <?php echo do_shortcode('[ajax_load_more post_type="post" pause="true"]'); ?>
                </div>

        </section>
</div>
    <!-- END SECTION CONTAINER -->

<!-- BEGIN FOOTER-->
  <?php get_footer(); ?>
<!-- END FOOTER -->
