<?php
/*
Template name: Contact Template
*/
?>
<?php get_header(); ?>
<div class="container">

  <h2 id="pageheader">Contact Me</h2>
<section class="row">
  <div class="six columns">
    <form id="contactform" method="post" action="contact-form.php">
        <label for="Name">Name:</label>
        <input type="text" name="Name" id="Name" size="45" type="text/css"/>

        <label for="Email">Email:</label>
        <input type="text" name="Email" id="Email" size="45"/>

        <label for="Reason">What do I owe the please?</label>
        <select>
          <option value="hi">Just saying hi</option>
          <option value="site">Comments about my blog site</option>
          <option value="webdesgin">Want to talk web design</option>
          <option value="other">Other</option>
        </select>

        <label for="Message">Message:</label><br />
        <textarea name="Message" rows="30" cols="45" id="Message"></textarea>

        <input type="submit" name="submit" value="Submit" class="submit-button" />
    </form>
  </div>

  <div class="six columns">
    <div id="emailcenter">
      <?php dynamic_sidebar('contact-one'); ?>
    </div>
  </div>


</section>
</div>
<?php get_footer(); ?>
