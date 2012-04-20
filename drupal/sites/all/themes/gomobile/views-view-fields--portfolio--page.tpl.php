<?php 
if (theme_get_setting('tm_portfolio') == 3) { ?>
<div class="left14 border_img">
<h3><?php print $fields['title']->content; ?></h3>
<?php 
if (isset($fields['field_image']->content) and strpos($fields['field_image']->content, '<img')) {
print str_replace('<a ', '<a rel="prettyPhoto[gallery]" ', $fields['field_image']->content); 
} else {
$sui = strpos($fields['field_emvideo']->content, 'style');
$sub = substr($fields['field_emvideo']->content, $sui, strpos($fields['field_emvideo']->content, 'src') - $sui);
$sur = str_replace(array('style="','"',':','px;'), array('','','="','"'), $sub);
$vid = str_replace($sub, $sur, $fields['field_emvideo']->content);
print '<div class="videocontainer">'.$vid.'</div>';
}
?>
<span class="portfolio_caption"><?php print $fields['body_1']->content; ?></span><b>+</b></div>
<?php print gomobile_clr_4(); ?>
<?php } elseif (theme_get_setting('tm_portfolio') == 1) { ?>
<div class="left12 border_img">
<h3><?php print $fields['title_1']->content; ?></h3>
<?php 
if (isset($fields['field_image_2']->content) and strpos($fields['field_image_2']->content, '<img')) {
  print str_replace('<a ', '<a rel="prettyPhoto[gallery]" ', $fields['field_image_2']->content); 
} else {
$sui = strpos($fields['field_emvideo_2']->content, 'style');
$sub = substr($fields['field_emvideo_2']->content, $sui, strpos($fields['field_emvideo_2']->content, 'src') - $sui);
$sur = str_replace(array('style="','"',':','px;'), array('','','="','"'), $sub);
$vid = str_replace($sub, $sur, $fields['field_emvideo_2']->content);
print '<div class="videocontainer">'.$vid.'</div>';
}
?>
<span class="portfolio_caption"><?php print $fields['body_2']->content; ?></span><b>+</b></div>
<?php print gomobile_clr_2(); ?>
<?php } else { ?>
<div class="left13 border_img">
<h3><?php print $fields['title_2']->content; ?></h3>
<?php 
if (isset($fields['field_image_1']->content) and strpos($fields['field_image_1']->content, '<img')) {
print str_replace('<a ', '<a rel="prettyPhoto[gallery]" ', $fields['field_image_1']->content); 
} else {
$sui = strpos($fields['field_emvideo_1']->content, 'style');
$sub = substr($fields['field_emvideo_1']->content, $sui, strpos($fields['field_emvideo_1']->content, 'src') - $sui);
$sur = str_replace(array('style="','"',':','px;'), array('','','="','"'), $sub);
$vid = str_replace($sub, $sur, $fields['field_emvideo_1']->content);
print '<div class="videocontainer">'.$vid.'</div>';
}
?>
<span class="portfolio_caption"><?php print $fields['body']->content; ?></span><b>+</b></div>
<?php print gomobile_clr_3(); ?>
<?php } ?>