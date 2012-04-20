<li>
<?php print $fields['field_image']->content; ?>
<div class="flex-caption">
<div class="caption_title_line"><h2><?php print $fields['title']->content; ?></h2> <span class="comm_line"><a href="<?php print url('node/'.$fields['nid']->content, array('fragment' => 'comment-form')) ?>"><?php print $fields['comment_count']->content; ?></a></span></div>
<div class="date_line">
<span class="day"><?php print $fields['created']->content; ?></span>
<span class="month"><?php print $fields['created_1']->content; ?></span>
</div>
</div>
</li>