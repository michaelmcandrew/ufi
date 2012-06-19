<?php

 $elements = drupal_get_form('user_login_block');

 $rendered = drupal_render($elements);

 // to see what you have to work with
 // print "<pre>ELEMENTS: " . print_r($elements,1) . "</pre>";

 $output  = '<form action="' . $elements['#action'] . 
                           '" method="' . $elements['#method'] . 
                           '" id="' . $elements['#id'] . 
                           '" accept-charset="UTF-8"><div>';

 $output .= $elements['name']['#children'];
 $output .= $elements['pass']['#children'];
 $output .= $elements['form_build_id']['#children'];
 $output .= $elements['form_id']['#children'];
 $output .= $elements['actions']['#children'];
 //$output .= $elements['links']['#children'];
 $output .= '</div></form>';

 print $output;
 ?>
 
<a href="/user/password">Forgot Password?</a>