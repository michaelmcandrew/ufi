<?php 
$n1 = '';
foreach ($rows as $id => $row) {
  $n1 .= $row;
}
print ($n1 ? '<section class="items '.theme_get_setting('tm_value_theme_4').' clear">'.$n1.'' : '</section>');
?>
