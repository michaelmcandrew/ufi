<?php if ($content['#node']->comment and !($content['#node']->comment == 1 and $content['#node']->comment_count)) { ?>
<!-- Comments -->
<section class="comments">
  <h1><?php print t('Post comments'); ?></h1>
  <?php print render($content['comments']); ?>
</section>
<!-- // Comments -->
<!-- Comment form -->
<section class="comment-form">
  <h1><?php print t('Leave a comment'); ?></h1>
  <?php print str_replace('resizable', '', render($content['comment_form'])); ?>
</section>
<?php } ?>