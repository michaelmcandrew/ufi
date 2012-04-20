<?php if (!$page) { ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<article class="post page">
  <section class="main clear">
    <h1 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h1>

    <div class="featured flexslider">
      <?php print str_replace(
                  array(' even', ' odd', '<div class="field field-name-field-image field-type-image field-label-hidden"><div class="field-items">', '</div><div class="field-item">', '<div class="field-item">', '</div></div></div>', 'srca'), 
                  array('', '', '<ul class="slides">', '</li><li>', '<li>', '</li></ul>', 'class="responsive" src="/" data-src'), 
                  render($content['field_image'])); ?>
    </div>
    <div class="content">
    <p class="tags"><?php print str_replace(
                  array(' even', ' odd', '<div class="field field-name-field-portfoliotags field-type-taxonomy-term-reference field-label-hidden"><div class="field-items">', '<div class="field-item">', '<div class="field field-name-field-portfoliocategory field-type-taxonomy-term-reference field-label-hidden"><div class="field-items">', '</div>', 'taxonomy/term'), 
                  array('', '', '', '', '', ' ','portfolio')
                  , render($content['field_portfoliotags']).render($content['field_portfoliocategory'])); ?></p>

    <?php
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      hide($content['field_category']);
      hide($content['my_additional_field']);
      print render($content);
    ?>

    </div>
  </section>
	<div class="social clear">
			<?php print render($content['my_additional_field']); ?>
	</div>
  <?php if ($links = render($content['links'])): ?>
    <div class="social clear"><?php print $links; ?></div>
  <?php endif; ?>
</article>
</div>
<?php } else { ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<article class="post page">
  <section class="main clear">
    <h1 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h1>

    <div class="featured flexslider">
      <?php print str_replace(
                  array(' even', ' odd', '<div class="field field-name-field-image field-type-image field-label-hidden"><div class="field-items">', '</div><div class="field-item">', '<div class="field-item">', '</div></div></div>', 'srca'), 
                  array('', '', '<ul class="slides">', '</li><li>', '<li>', '</li></ul>', 'class="responsive" src="/" data-src'), 
                  render($content['field_image'])); ?>
    </div>
    <div class="content">
    <p class="tags"><?php print str_replace(
                  array(' even', ' odd', '<div class="field field-name-field-portfoliotags field-type-taxonomy-term-reference field-label-hidden"><div class="field-items">', '<div class="field-item">', '<div class="field field-name-field-portfoliocategory field-type-taxonomy-term-reference field-label-hidden"><div class="field-items">', '</div>', 'taxonomy/term'), 
                  array('', '', '', '', '', ' ','portfolio')
                  , render($content['field_portfoliotags']).render($content['field_portfoliocategory'])); ?></p>

    <?php
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      hide($content['field_category']);
      hide($content['my_additional_field']);
      print render($content);
    ?>

    </div>
  </section>
	<div class="social clear">
			<?php print render($content['my_additional_field']); ?>
	</div>
  <?php if ($links = render($content['links'])): ?>
    <div class="social clear"><?php print $links; ?></div>
  <?php endif; ?>
</article>
</div>
<?php print render($content['comments']); ?> 
  <?php unset($content['field_image']);
      unset($content['links']);
      unset($content['comments']);
      unset($content['body']);
      unset($content['#printed']);
      unset($content['#sorted']);
      unset($content['#children']);
      unset($content['field_portfoliotags']);
      unset($content['field_portfoliocategory']);
      unset($content['my_additional_field']);
        //print '<pre>'. check_plain(print_r($content, 1)) .'</pre>'; ?>
<?php } ?>