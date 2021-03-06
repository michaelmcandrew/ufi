<?php if (!$page) { ?>
<article class="post">
  <section class="main clear">
    <h1 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h1>
	<ul class="meta">
		<li class="date"><?php print format_date($node->created,'custom','M j Y'); ?></li>
	</ul>
		<div class="content">
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_tags']);
        hide($content['field_category']);
        print render($content);
      ?>
		<?php print render($content['links']); ?>
    </div>
  </section>
  <!-- print the tags -->
  <?php if ($field_tags = render($content['field_tags'])) { ?><ul class="meta"><li class="tags"><?php print $field_tags; ?>&nbsp;</li></ul><?php } ?>


</article>
<?php } else { ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<article class="post">
  <section class="main clear">
    <h1 class="title"><?php print $title; ?></h1>
	<?php if ($display_submitted): ?>
		<ul class="meta">
			<li class="date"><?php print format_date($node->created,'custom','M j Y'); ?></li>
		</ul>
		<div class="content">
	<?php endif; ?>
    <div class="content">
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_tags']);
        hide($content['field_category']);
        print render($content);
      ?>
    </div>
	</section>
	<!-- print the tags -->
    <?php if ($field_tags = render($content['field_tags'])) { ?><ul class="meta"><li class="tags"><?php print $field_tags; ?>&nbsp;</li></ul><?php } ?>

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