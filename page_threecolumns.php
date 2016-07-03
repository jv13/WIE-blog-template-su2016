<?php
/*
Template name: Three Column Width
*/
?>
<?php get_header(); ?>
<div class="container">

  <h2 id="pageheader">Archives</h2>
<section class="row">
  <div class="four columns">
    <?php dynamic_sidebar('archive-one'); ?>
  </div>

  <div class="four columns">
    <?php dynamic_sidebar('archive-two'); ?>
  </div>

  <div class="four columns">
    <?php dynamic_sidebar('archive-three'); ?>
  </div>

</section>
</div>
<?php get_footer(); ?>
