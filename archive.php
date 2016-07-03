<?php
/* Template Name: Archive Page */

get_header(); ?>
<div class="container">
  <br>
  <br>

<div class="row">
  <div class="row">
      <div class="twelve columns">

        <div class="row ">
          <div class="six columns ">
            <h2>Archives by Month:</h2>
            <ul>
              <?php wp_get_archives('type=monthly'); ?>
            </ul>
          </div>

          <div class="six columns">
            <h2>Archives by Tags:</h2>
            <ul>
               <?php the_tags(); ?>
             </ul>
          </div>
        </div>
    </div>
  </div>
<br>
    <div class="twelve columns">
        <?php if ( have_posts() ) :
            // The Loop
            while ( have_posts() ) : the_post();?>

              <div class="borderposts">
            <!-- data context -->
                <h3><a href="<?php the_permalink() ?>">
                      <?php the_title(); ?>
                    </a>
                </h3>

                <h4 class="postdate"><?php the_time('F j, Y'); ?> </h4>

                <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>">Read More</a>
              </div>
            <?php endwhile; ?> <!-- End Loop -->
          <?php else: ?>
          <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
</div>
</div>

<?php get_footer(); ?>
