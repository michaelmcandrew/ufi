<article class="item">
  <div class="image">
       <?php 
      $style = theme_get_setting('tm_value_theme_6');
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
      } ?>
    <?php print str_replace(array('href=', '</a>'),array('class="fancybox" data-fancybox-group="gallery" href=', '<span class="hover"></span></a>'),$fields['field_iimage'.$p]->content); ?>
  </div>
</article>