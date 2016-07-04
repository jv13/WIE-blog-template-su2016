<?php get_header(); ?>
  <div class="container">
    <section class="row">
        <div class="twelve columns">

<!-- BEGIN PAGE PHP -->
            <?php if ( have_posts() ) {
                while( have_posts() ) {
                    /* OUR DATA CONTEXT IS DEFINED */
                    the_post();

                    if ( has_post_thumbnail() ) { ?>
                      <div class="post-thumbnail" class="postpicture">
                        <?php the_post_thumbnail('large'); ?>
                      </div>
                    <?php } ?>

                    <h2 id="posttitle"><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                    <p class="signature"> -- jen </p>

                    <?php
                  } // end while
                } // end iff
            ?>
<!-- END PAGE PHP -->

        </div>
    </section>

    <section class="row">
      <div class="four columns">
      <div class="relatedposts">
        <h3>Related posts</h3>
          <?php
            $orig_post = $post;
            global $post;
            $tags = wp_get_post_tags($post->ID);

            if ($tags) {
              $tag_ids = array();
              foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
              $args=array(
              'tag__in' => $tag_ids,
              'post__not_in' => array($post->ID),
              'posts_per_page'=>1, // Number of related posts to display.
              'caller_get_posts'=>1
              );

              $my_query = new wp_query( $args );

              while( $my_query->have_posts() ) {
                $my_query->the_post();
            ?>

      <div class="relatedthumb">
          <a rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail('medium'); ?><br />
          <h4 class="postdate"><?php the_time('F j, Y'); ?> </h4>
          <h3><?php the_title(); ?></h3>
          <h4><?php the_tags(); ?></h4>
          </a>
      </div>

      <?php }
            }
      $post = $orig_post;
      wp_reset_query();
      ?>
  </div>
</div>



<div class="four columns">
<div class="relatedposts">
  <h3>Related posts</h3>
    <?php
      $orig_post = $post;
      global $post;
      $tags = wp_get_post_tags($post->ID);

      if ($tags) {
        $tag_ids = array();
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
        $args=array(
        'tag__in' => $tag_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=>1, // Number of related posts to display.
        'caller_get_posts'=>1
        );

        $my_query = new wp_query( $args );

        while( $my_query->have_posts() ) {
          $my_query->the_post();
      ?>

<div class="relatedthumb">
    <a rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail('medium'); ?><br />
    <h4 class="postdate"><?php the_time('F j, Y'); ?> </h4>
    <h3><?php the_title(); ?></h3>
    <h4><?php the_tags(); ?></h4>
    </a>
</div>

<?php }
      }
$post = $orig_post;
wp_reset_query();
?>
</div>
</div>


<div class="four columns">
<div class="relatedposts">
  <h3>Related posts</h3>
    <?php
      $orig_post = $post;
      global $post;
      $tags = wp_get_post_tags($post->ID);

      if ($tags) {
        $tag_ids = array();
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
        $args=array(
        'tag__in' => $tag_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=>1, // Number of related posts to display.
        'caller_get_posts'=>1
        );

        $my_query = new wp_query( $args );

        while( $my_query->have_posts() ) {
          $my_query->the_post();
      ?>

<div class="relatedthumb">
    <a rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail('medium'); ?><br />
    <h4 class="postdate"><?php the_time('F j, Y'); ?> </h4>
    <h3><?php the_title(); ?></h3>
    <h4><?php the_tags(); ?></h4>
    </a>
</div>

<?php }
      }
$post = $orig_post;
wp_reset_query();
?>
</div>
</div>
    </section>
  </div>

<?php get_footer(); ?>
