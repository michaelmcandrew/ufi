<?php 
$n1 = '';
foreach ($rows as $id => $row) {
  $n1 .= $row;
}
print ($n1 ? '<section class="filter"><a href="'.url('portfolio').'" >'.t('All').'</a>'.$n1.'</section>' : '');
?>