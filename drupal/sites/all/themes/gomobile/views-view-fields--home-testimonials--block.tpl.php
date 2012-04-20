<?php global $base_url; ?>
<img src="<?php print $base_url.'/'.drupal_get_path('theme', 'gomobile')?>/images/icon_testimonials.gif" alt="" title="" class="left_icon" />
<p><i>"<?php print $fields['body']->content; ?> - <strong class="color1">by <?php print $fields['title']->content; ?></strong>".</i></p>