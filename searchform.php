<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
  <div>
    <label for="s">Search for:</label> <input class="text" type="text" value="search
    <?php
      if(trim(wp_specialchars($s,1))!='') echo trim(wp_specialchars($s,1));else echo ' '
    ;?>" name="s" id="s" />
  </div>
</form>
