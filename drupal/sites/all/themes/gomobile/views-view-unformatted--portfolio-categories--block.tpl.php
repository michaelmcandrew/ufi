<?php 
$out = '';
foreach ($rows as $id => $row) {
$out .= $row;
}
if ($out) { 
?>
<ul class="filter_portfolio">
<li class="segment-0<?php print ((!arg(1)) ? ' selected' : '') ?>"><a href="<?php print url('portfolio'); ?>" data-value="all"><?php print t('view all'); ?></a></li>
<?php print $out; ?>
</ul><div class="clear"></div>
<?php } ?>