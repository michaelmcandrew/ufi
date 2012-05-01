<?php 
$n1 = '';
foreach ($rows as $id => $row) {
  $n1 .= $row;
}
if (theme_get_setting('tm_value_theme_2') == 'text') { 
  print ($n1 ? '<div class="alpha big flexslider"><ul class="slides">'.$n1.'</ul></div><div class="descriptions beta">'.bestmobile_slideshow_text('', true).'</div>' : '');
} else {
  print ($n1 ? '<ul class="slides">'.$n1.'</ul>' : '');
}
?>