<?php

drupal_add_js('
var $ = jQuery.noConflict();
$(window).load(function() {
	
  $(function() {
    $(\'#activator\').click(function(){
      $(\'#top_slide_content\').animate({\'top\':\'0px\'},400);
    });
    $(\'#boxclose\').click(function(){
      $(\'#top_slide_content\').animate({\'top\':\'-500px\'},400);
    });
  });
	
  $(\'#basicuse\').jflickrfeed({
    limit: 6,
    qstrings: {
      id: \''.theme_get_setting('tm_flickr').'\'
    },
    itemTemplate: \'<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>\'
	});
});
  jQuery(function($){
	$(".tweet").tweet({
	  join_text: "auto",
	  username: "'.theme_get_setting('tm_twitter').'",
	  count: 1,
	  auto_join_text_default: "we said,",
	  auto_join_text_ed: "we",
	  auto_join_text_ing: "we were",
	  auto_join_text_reply: "we replied",
	  auto_join_text_url: "we were checking out",
	  loading_text: "loading tweets..."
	});
  });
var main_menu=new main_menu.dd("main_menu");
main_menu.init("main_menu","menuhover");
$(".videocontainer").fitVids();
', array('type' => 'inline', 'scope' => 'footer', 'weight' => 5));
 

function gomobile_clr_2() {
  static $count = 1;
  if ($count == 2) {
    $count = 1;
    return '<div class="clear"></div>';
  }
  $count++;
}

function gomobile_clr_3() {
  static $count = 1;
  if ($count == 3) {
    $count = 1;
    return '<div class="clear"></div>';
  }
  $count++;
}

function gomobile_clr_4() {
  static $count = 1;
  if ($count == 4) {
    $count = 1;
    return '<div class="clear"></div>';
  }
  $count++;
}

/* Top Menu */
function gomobile_tree_top($menu_name = 'main-menu', $type = 'main_menu') {
  static $menu_output = array();

  if (!isset($menu_output[$menu_name])) {
    $tree = menu_tree_page_data($menu_name);
    $menu_output[$menu_name] = gomobile_tree_output_top($tree,$type);
  }
  return $menu_output[$menu_name];
}


function gomobile_tree_output_top($tree,$type) {
  $output = '';
  $items = array();

  foreach ($tree as $data) {
    if (!$data['link']['hidden']) {
      $items[] = $data;
    }
  }

  $num_items = count($items);
  $s = '';
  foreach ($items as $i => $data) {
	  if ($data['link']['in_active_trail']) $a = ' class="active"'; else $a = '';
    if ($data['below']) {
	  $output .= '<li'.$a.'><a href="'.url($data['link']['href']).'">'.$data['link']['title'].'</a>' . gomobile_tree_output_top2($data['below']) ."</li>";
    }
    else {
	  $output .= '<li'.$a.'><a href="'.url($data['link']['href']).'">'.$data['link']['title'].'</a>'."</li>";
    }
  }
  return $output ? '<ul id="'.$type.'">'. $output .'</ul>'.$s : '';
}

function gomobile_tree_output_top2($tree) {
  $output = '';
  $items = array();

  foreach ($tree as $data) {
    if (!$data['link']['hidden']) {
      $items[] = $data;
    }
  }
  $num_items = count($items);
  foreach ($items as $i => $data) {
	  if ($data['link']['in_active_trail']) $a = ' class="current"'; else $a = '';
	if ($data['below']) {
		$output .= '<li'.$a.'><a href="'.url($data['link']['href']).'">'.$data['link']['title'].'</a>'.gomobile_tree_output2_cat($data['below'])."</li>";
	}
    else {
	  $output .= '<li'.$a.'><a href="'.url($data['link']['href']).'">'.$data['link']['title'].'</a>'."</li>";
    }
  }
  return $output ? '<ul>'. $output .'</ul>' : '';
}

/* Bottom Menu */
function gomobile_tree_bottom($menu_name = 'menu-footer-menu', $type = 'footer-menu') {
  static $menu_output = array();

  if (!isset($menu_output[$menu_name])) {
    $tree = menu_tree_page_data($menu_name);
    $menu_output[$menu_name] = gomobile_tree_output_bottom($tree,$type);
  }
  return $menu_output[$menu_name];
}


function gomobile_tree_output_bottom($tree,$type) {
  $output = '';
  $items = array();

  foreach ($tree as $data) {
    if (!$data['link']['hidden']) {
      $items[] = $data;
    }
  }

  $num_items = count($items);
  $s = '';
  foreach ($items as $i => $data) {
	  //drupal_set_message('<pre>'. check_plain(print_r($data, 1)) .'</pre>');
	  //$s .= '<pre>'. check_plain(print_r($data, 1)) .'</pre>';
	  if ($data['link']['in_active_trail']) $a = ' class="active"'; else $a = '';
	  $output .= '<li'.$a.'><a href="'.url($data['link']['href']).'">'.$data['link']['title'].'</a>'."</li>";
  }
  return $output ? '<ul class="'.$type.'">'. $output .'</ul>'.$s : '';
}




function gomobile_menu_tree($tree) {
  return '<ul>'. $tree['tree'] .'</ul>';
}

/**
 * Generate the HTML output for a menu item and submenu.
 *
 * @ingroup themeable
 */
 
function gomobile_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {
  return '<li>'. $link . $menu ."</li>\n";
}


/* Node */
function gomobile_get_node($type = 'type') {
	static $node = false;
	if (!$node and arg(0) == 'node' and is_numeric(arg(1))){
		$node = db_fetch_array(db_query('SELECT * FROM {node} where nid = %d',arg(1)));
	}	
  return $node[$type];
}
