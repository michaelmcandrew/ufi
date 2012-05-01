<?php 
$p = '';
if (theme_get_setting('tm_value_theme_2') == 'full') { 
  $p = '';
} elseif (theme_get_setting('tm_value_theme_2') == 'banners') {
  $p = '_1';
} else {
  $p = '_1';
  if (!isset($fields['body']->content)) $fields['body']->content = '';
  bestmobile_slideshow_text('<article>'.$fields['body']->content.'</article>');
} ?>
<li>
  <?php if (isset($fields['field_url']->content) and $fields['field_url']->content) { ?>
  <a href="<?php print url($fields['field_url']->content); ?>">
    <?php if (isset($fields['field_iimage'.$p]->content)) print str_replace(array('src='),array('class="responsive" data-side="both" src='),$fields['field_iimage'.$p]->content); ?>
    <?php if (isset($fields['field_bigtext']->content) and $fields['field_bigtext']->content) { ?><span class="caption white top"><span><?php print $fields['field_bigtext']->content; ?></span></span><?php } ?>
  </a>
  <?php } else { ?>    
    <?php if (isset($fields['field_iimage'.$p]->content)) print str_replace(array('src='),array('class="responsive" data-side="both" src='),$fields['field_iimage'.$p]->content); ?>
    <?php if (isset($fields['field_bigtext']->content) and $fields['field_bigtext']->content) { ?><span class="caption white top"><span><?php print $fields['field_bigtext']->content; ?></span></span><?php } ?>
  <?php } ?>
  <?php if (isset($fields['field_opttext']->content) and $fields['field_opttext']->content) { ?><p class="flex-caption"><?php print $fields['field_opttext']->content; ?></p><?php } ?>
</li>