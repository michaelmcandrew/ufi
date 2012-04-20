<?php if (!$page) { ?>
<article class="post default">
  <section class="main">
    <h1 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h1>
    <div class="content">
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content);
      ?>
    </div>
  </section>
</article>
<?php } else { ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<article class="post default">
  <section class="main clear">
    <h1 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h1>
    <div class="content">
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content);
      ?>
    </div>
	</section>
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