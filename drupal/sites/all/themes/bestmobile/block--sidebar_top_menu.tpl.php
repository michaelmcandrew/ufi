<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>  
  <?php 
    global $user; 
    if ($user->uid) {
      $out = '<li><a href="'.url('user').'" title="">'.t('My Account').'</a></li><li><a href="'.url('user/logout').'">'.t('Log Out').'</a></li>';
    } else {
      $out = '<li><a href="'.url('user/register').'" title="">'.t('Sign Up').'</a></li><li><a href="'.url('user').'">'.t('Log In').'</a></li>';
    }
  ?>  
    <?php print ereg_replace('^<ul>', '<ul>'.$out, str_replace(array(' active-trail', ' first ', ' last ', ' class="leaf"', ' class="expanded"', ' class="leaf"', ' class="menu"', ' class="collapsed"'), '', $content));
    //print '<pre>'. check_plain(print_r($block, 1)) .'</pre>';
    ?>
</div>