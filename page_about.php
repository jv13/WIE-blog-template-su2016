<?php
/*
Template name: About Template
*/
?>
<?php get_header(); ?>
<div class="container">

  <h2 id="pageheader">About Me</h2>
  <section class="row">

    <div class="six columns">
      <?php dynamic_sidebar('about-one'); ?>
    </div>

    <div class="six columns">
      <?php dynamic_sidebar('about-two'); ?>
    </div>

    <p class="signature"> -- jen </p>

  </section>

  <section class="row">

    <div class="twelve columns">
      <?php dynamic_sidebar('about-three'); ?>
    </div>


  </section>
</div>
<?php get_footer(); ?>
