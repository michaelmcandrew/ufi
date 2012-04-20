<?php 
$out = '';
foreach ($rows as $id => $row) {
$out .= $row;
}
if ($out) { 

drupal_add_js('
//var $ = jQuery.noConflict();
  $(window).load(function() {
    $(\'.flexslider\').flexslider({
          animation: "slide"
    });
	
  });
', array('type' => 'inline', 'scope' => 'footer', 'weight' => 6));
?>
<div class="slider_container"><div class="flexslider"><ul class="slides">
<?php print $out; ?>
</ul></div></div>
<?php } ?>