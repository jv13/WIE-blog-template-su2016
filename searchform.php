<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
  <div>
    <label id="donotshow" for="s">Search for:</label>
    <input class="text" type="text" placeholder="Search
    <?php
      if(trim(wp_specialchars($s,1))!='') echo trim(wp_specialchars($s,1));else echo ' '
    ;?>" name="s" id="s" />
  </div>
</form>
