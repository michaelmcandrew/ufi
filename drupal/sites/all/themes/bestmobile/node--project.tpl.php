<?php if (!$page) { ?>
	<div id="project-links"><?php print render($content['field_project_links']); ?></div>
	
	<div class="widget-twitter" data-username="<?php print ($node->field_twitter_username); ?>" data-count="4" data-retweets="true">
		<div class="tweets"></div>
		<div style="color:green;"><?php print render($content['field_twitter_username']); ?></div>
	</div>
<article class="post project-text">
  <section class="main clear">
    <h1><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h1>
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
	
	<div id="project-links"><?php print render($content['field_project_links']); ?></div>
	
	<!-- <div class="widget-twitter" data-username="<?php print ($node->field_twitter_username); ?>" data-count="4" data-retweets="true">
		<div class="tweets"></div>
		<div style="color:green;"><?//php print render($content['field_twitter_username']); ?></div>
	</div> -->
	
<article class="post project-text">
  <section class="main clear">
	<?php print render($title_prefix); ?>
    <h1><?php print $title; ?></h1>
	<?php print render($title_suffix); ?>
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