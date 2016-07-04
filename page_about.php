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

      <p id="signature"> -- jen </p>
    </div>

  </section>

  <section class="row">

    <div class="twelve columns">
      <?php dynamic_sidebar('about-three'); ?>
    </div>


  </section>
</div>
<?php get_footer(); ?>
