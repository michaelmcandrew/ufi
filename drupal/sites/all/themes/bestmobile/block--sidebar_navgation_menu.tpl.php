<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <nav id="nav-main" class="clear">
  <?php print str_replace(array(' active-trail', 'first ', 'last ', ' class="leaf"', ' class="expanded"', ' class="leaf"', ' class="menu"', ' class="collapsed"'), '', $content);
  //print '<pre>'. check_plain(print_r($block, 1)) .'</pre>';
  ?>
  </nav>
</div>