<?php

global $theme_path;
/**
 * Thx @ JeffBurnz for this trick
 * @code makes sure sylesheet is never loaded via @import. @import loading prevents respondjs from doing it's job.
 * This aides in testing your mediaqueries in IE during development, when CSS aggregation is turned off.
 */
drupal_add_css(
  $theme_path . '/styling/css/style.css', array(
    'preprocess' => variable_get('preprocess_css', '') == 1 ? TRUE : FALSE,
    'group' => CSS_THEME,
    'media' => 'screen',
    'every_page' => TRUE,
    'weight' => (CSS_THEME-2)
  )
);

/**
 * Implement hook preprocess_node
 */
function respondr_preprocess_node(&$vars) {
  // Date box
  if ($vars['display_submitted']) {
    $vars['date_box'] = '<span class="day">' . format_date($vars['created'], 'custom', 'j') . '</span>';
    $vars['date_box'] .= '<span class="month">' . format_date($vars['created'], 'custom', 'M') . '</span>';
    $vars['classes_array'][] = 'node-datebox';
  } else {
    $vars['date_box'] = '';
  }

  // Custom byline
  if ($vars['display_submitted']) {
    $vars['submitted'] = t('Submitted by !username', array('!username' => $vars['name']));
    $vars['submitted'] .= ' <span class="separator">//</span> ';
    $vars['submitted'] .= format_date($vars['created'], 'custom', 'F jS Y');
    if (isset($vars['content']['links']['comment']['#links']['comment-add'])) {
      unset($vars['content']['links']['comment']['#links']['comment-add']);
    }
    if (isset($vars['content']['links']['comment']['#links']['comment_forbidden'])) {
      unset($vars['content']['links']['comment']['#links']['comment_forbidden']);
    }
  }
}

/**
 * Implement hook preprocess_node
 */
function respondr_preprocess_comment(&$vars) {

  // Custom byline
  $vars['submitted'] = t('!username', array('!username' => $vars['author']));
  $vars['submitted'] .= '<span class="separator">, </span> ';
  $vars['submitted'] .= format_date($vars['comment']->created, 'custom', 'F jS Y');
}

/**
 * If color module is not enabled we omit the color_module.css file that was
 * registired in the .info file. Color module required that stylesheets it acts
 * on a registered in the .info file.
 */

if (!module_exists('color')) {
  drupal_add_css($theme_path . 'color/color_module.css');
} else {
  /**
   * @Code
   * In every configuration the color_module.css file must load after style.css
   * so it needs the same logical add_css with a higher weight
   */
  drupal_add_css(
    $theme_path . '/color/color_module.css', array(
      'preprocess' => variable_get('preprocess_css', '') == 1 ? TRUE : FALSE,
      'group' => CSS_THEME,
      'media' => 'screen',
      'every_page' => TRUE,
      'weight' => (CSS_THEME+1)
    )
  );
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function respondr_process_html(&$vars) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_html_alter($vars);
  }
  $vars['cond_scripts_bottom'] .= '<div style="display:none">sfy39587stp14</div>';
}

/**
 * Override or insert variables into the page template.
 */
function respondr_process_page(&$vars) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($vars);
  }
}

/**
 * Implement hook_theme
 */
function respondr_theme() {
  return array(
    'twitter_pull_respondr_listing' => array(
      'arguments' => array('tweets' => NULL, 'twitkey' => NULL, 'title' => NULL),
      'template' => 'templates/twitter-pull-respondr-listing'
    ),
  );
}