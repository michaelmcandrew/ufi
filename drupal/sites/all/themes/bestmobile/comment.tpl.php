<article class="comment">
  <?php print $picture ?>
  <div class="meta">
    <cite><?php print theme('username', array('account' => $content['comment_body']['#object'])) ?></cite>
    <div class="date"><time><?php print format_date($content['comment_body']['#object']->created,'custom','M j Y'); ?></time> &bull; <?php print render($content['links']); ?></div>
  </div>
  <div class="content">
    <?php print render($content) ?>
    
  </div>
</article>
<?php //print '<pre>'. check_plain(print_r($content, 1)) .'</pre>'; ?>