<li><?php 
if (isset($fields['field_image']->content) and strpos($fields['field_image']->content, '<img')) {
print $fields['field_image']->content; 
} else {
print $fields['field_emvideo']->content;
}
?><span class="carousel_caption"><?php print $fields['title']->content; ?></span><b>+</b></li>