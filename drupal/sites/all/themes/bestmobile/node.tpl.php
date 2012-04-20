<?php if (!$page) { ?>
<article class="post<?php print ' '.strip_tags(render($content['field_icon'])); ?>">
  <section class="main clear">
    <h1 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h1>
    <div class="content">
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_tags']);
        hide($content['field_category']);
        hide($content['my_additional_field']);
        print render($content);
      ?>
    </div>
  </section>
  <?php if ($display_submitted): ?>
  <ul class="meta">
    <?php if ($node->comment and !($node->comment == 1 and !$node->comment_count)) { ?><li class="comments"><a href="<?php print url("node/$node->nid", array('fragment' => 'comment-form')) ?>"><?php print format_plural($node->comment_count, '1 Comment', '@count Comments') ?></a></li><?php } ?>
    <li class="date"><?php print format_date($node->created,'custom','M j Y'); ?></li>
    <?php if ($field_category = render($content['field_category'])) { ?><li class="category"><?php print $field_category; ?>&nbsp;</li><?php } ?>
    <?php if ($field_tags = render($content['field_tags'])) { ?><li class="tags"><?php print $field_tags; ?>&nbsp;</li><?php } ?>
    <?php /* ?><li class="link"><?php print render($content['links']); ?></li><?php */ ?>
  </ul>
  <?php endif; ?>
</article>
<?php } else { ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<article class="post<?php print ' '.strip_tags(render($content['field_icon'])); ?>">
  <section class="main clear">
    <h1 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h1>
    <div class="content">
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_tags']);
        hide($content['field_category']);
        hide($content['my_additional_field']);
        print render($content);
      ?>
    </div>
	</section>
  <?php if ($my_additional_field = render($content['my_additional_field'])) { ?>
	<div class="social clear">
			<?php print $my_additional_field; ?>
	</div>
  <?php } ?>
  <?php if ($display_submitted): ?>
  <ul class="meta">
    <?php if ($node->comment and !($node->comment == 1 and !$node->comment_count)) { ?><li class="comments"><a href="<?php print url("node/$node->nid", array('fragment' => 'comment-form')) ?>"><?php print format_plural($node->comment_count, '1 Comment', '@count Comments') ?></a></li><?php } ?>
    <li class="date"><?php print format_date($node->created,'custom','M j Y'); ?></li>
    <?php if ($field_category = render($content['field_category'])) { ?><li class="category"><?php print $field_category; ?>&nbsp;</li><?php } ?>
    <?php if ($field_tags = render($content['field_tags'])) { ?><li class="tags"><?php print $field_tags; ?>&nbsp;</li><?php } ?>
    <?php /* ?><li class="link"><?php print render($content['links']); ?></li><?php */ ?>
  </ul>
  <?php endif; ?>
  <?php if ($links = render($content['links'])): ?>
    <div class="social clear"><?php print $links; ?></div>
  <?php endif; ?>
</article>
<?php print render($content['comments']); ?> 
  <?php unset($content['field_image']);
      unset($content['links']);
      unset($content['comments']);
      unset($content['body']);
      unset($content['#printed']);
      unset($content['#sorted']);
      unset($content['#children']);
      unset($content['field_tags']);
      unset($content['field_category']);
      unset($content['my_additional_field']);
        //print '<pre>'. check_plain(print_r($content, 1)) .'</pre>'; ?>
<?php } ?>