<?php if ($page == 0) { ?>
<div class="post">
  <h2><a href="<?php print $node_url ?>"><?php print $title ?></a></h2>
  <?php if ($display_submitted) { ?>
  <div class="post_left">
    <div class="date_line_blog">
      <span class="day"><?php print format_date($node->created,'custom','d') ?></span>
      <span class="month"><?php print format_date($node->created,'custom','m') ?></span>
    </div>
    <div class="comm_line_blog"><a href="<?php print url("node/$node->nid", array('fragment' => 'comment-form')) ?>"><?php print $node->comment_count ?></a></div>
  </div>
  <?php } ?>
  <?php if ($field_image = render($content['field_image'])) { print $field_image; } else { print render($content['field_emvideo']); }?>
  <div class="entry">
    <?php hide($content['links']); hide($content['comments']); hide($content['links']); hide($content['field_tags']); print render($content); ?>
  </div>
  <?php if ($field_tags = render($content['field_tags'])) { ?><span class="blog_cat">in <?php print $field_tags ?></span><?php } ?>
  <?php if ($display_submitted) { ?><span class="blog_cat"> by <?php print $name ?></span><?php } ?>
  <a href="<?php print $node_url ?>" class="read_more"><?php print t('read more') ?></a>                 
</div>
<?php } else { ?>
<div class="post">
  <?php if (isset($content['field_subtitle'])) { ?><h2><a href="<?php print $node_url ?>"><?php print render($content['field_subtitle']) ?></a></h2><?php } ?>
  <?php if ($display_submitted) { ?>
  <div class="post_left">
    <div class="date_line_blog">
      <span class="day"><?php print format_date($node->created,'custom','d') ?></span>
      <span class="month"><?php print format_date($node->created,'custom','m') ?></span>
    </div>
    <div class="comm_line_blog"><a href="<?php print url("node/$node->nid", array('fragment' => 'comment-form')) ?>"><?php print $node->comment_count ?></a></div>
  </div>
  <?php } ?>
  <?php if ($field_image = render($content['field_emvideo'])) { 
    $sui = strpos($field_image, 'style');
    $sub = substr($field_image, $sui, strpos($field_image, 'src') - $sui);
    $sur = str_replace(array('style="','"',':','px;'), array('','','="','"'), $sub);
    $vid = str_replace($sub, $sur, $field_image);
    print '<div class="videocontainer">'.$vid.'</div>'; 
  } else { 
    print render($content['field_image']); 
  }?>
  <div class="entry">
    <?php hide($content['links']); hide($content['comments']); hide($content['links']); hide($content['field_tags']); hide($content['field_category']); hide($content['field_subtitle']); print render($content); ?>
  </div>

  <?php if ($field_tags = render($content['field_tags'])) { ?><span class="blog_cat">in <?php print $field_tags ?></span><?php } ?>
  <?php /* if ($field_tags = render($content['field_category'])) { ?><span class="blog_cat">in <?php print $field_tags ?></span><?php } */ ?>
  <?php if ($display_submitted) { ?><span class="blog_cat"> by <?php print $name ?></span><?php } ?>
</div>
<div class="clear"></div>
  <?php //print render($content['links']) ?>
  <?php print render($content['comments']) ?>
<?php } ?>

<?php //print '<pre>'. check_plain(print_r($content, 1)) .'</pre>'; ?>