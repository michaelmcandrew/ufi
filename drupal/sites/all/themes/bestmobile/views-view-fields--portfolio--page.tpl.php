<article class="item" data-category="<?php print $fields['field_portfoliocategory']->content; ?>">
  <div class="image">
    <a href="<?php print $fields['path']->content; ?>">
      <?php 
      $style = theme_get_setting('tm_value_theme_4');
      switch ($style) {
	      case 'tiny':
		      $p = '';
		      break;
	      case 'small':
		      $p = '_1';
		      break;
	      case 'medium':
		      $p = '_2';
		      break;
	      case 'big':
		      $p = '_3';
		      break;
        default:
		      $p = '';
      }
      print $fields['field_image'.$p]->content; ?>
      <span class="hover"></span>
    </a>
  </div>
  <section class="main">
    <?php if (theme_get_setting('tm_value_theme_5') == 'description') { ?><h1 class="title"><?php print $fields['title']->content; ?></h1><?php } ?>
    <div class="content">
      <?php if (theme_get_setting('tm_value_theme_5') == 'description') { ?><?php print $fields['body']->content; ?><?php } ?>
      <p class="tags">
        <?php print str_replace('taxonomy/term','portfolio',$fields['field_portfoliotags']->content); ?>
      </p>
    </div>
  </section>
</article>