<?php 
$out = '';
foreach ($rows as $id => $row) {
$out .= $row;
}
if ($out) { 

drupal_add_js('
  $(window).load(function() {
	
	$(".es-carousel ul li").hover(function(){
		 $(this).children(\'span\').animate({left:"20px"},{queue:false,duration:300});
		 $(this).children(\'b\').animate({top:"0px"},{queue:false,duration:300});
	}, function() {
         $(this).children(\'span\').animate({left:"10px"},{queue:false,duration:300});
		 $(this).children(\'b\').animate({top:"-20px"},{queue:false,duration:300});
	});
	
  });
$(\'#carousel\').elastislide({
	imageW 	: 200,
	minItems	: 2,
	margin		: 40,
  onClick : null
});
', array('type' => 'inline', 'scope' => 'footer', 'weight' => 6));

?>
<div id="carousel" class="es-carousel-wrapper">
  <div class="es-carousel">
    <ul>
      <?php print $out; ?>
    </ul>
  </div>
</div>
<?php } ?>