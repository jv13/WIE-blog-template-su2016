<?php
/* Template Name: Search Page */
get_header(); ?>
<div class="container">

<div class="row">
    <div class="twelve columns">
        <?php if( have_posts() ) :?>
            <h1><?php printf(
                __('Search Results for: %s'),
                '<span>' . get_search_query() . '</span>' );
                ?></h1>


            <?php

                while (have_posts()) : the_post(); ?>
                <div class="borderposts">
                  <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    </div>
                    <?php

                endwhile;
         else : ?></div>
            <h1>Nothing Found</h1>
            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
            <?php get_search_form(); ?>
        <?php endif; ?>

    </div>

</div>
</div>

<?php get_footer(); ?>
