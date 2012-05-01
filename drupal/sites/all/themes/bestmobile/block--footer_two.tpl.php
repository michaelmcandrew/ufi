<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if ($block->subject) { print '<h1>'.$block->subject.'</h1>'; } ?>
  <?php print render($title_suffix); ?>
  <?php print $content; ?>
  <?php //print '<pre>'. check_plain(print_r($block, 1)) .'</pre>'; ?>
</div>