<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if ($block->subject) { print '<h1>'.$block->subject.'</h1>'; } ?>
  <?php print render($title_suffix); ?>
  <?php print str_replace(array('resizable', 'name="name"', 'name="mail"', 'name="subject"'), 
                          array('', 'name="name" placeholder="'.t('name').'*"', 'name="mail" placeholder="'.t('mail').'*"', 'name="subject" placeholder="'.t('subject').'*"'), 
                          $content); ?>
  <?php //print '<pre>'. check_plain(print_r($block, 1)) .'</pre>'; ?>
</div>