<?php

/**
 * Implements hook_skinr_skin_PLUGIN_info().
 */
function respondr_skinr_skin_core_info() {
  $skins = array();

  /**
   * Arctica skins
   */

  $skins['respondr_skins'] = array(
    'title' => t('Respondr Block styles'),
    'type' => 'select',
    'description' => t('Present blocks in different styles'),
    'group' => 'general',
    'theme hooks' => array('block', 'panels_display', 'panels_pane', 'panels_panel'),
    'default status' => TRUE,
    'options' => array(
      'action-block' => array(
        'title' => 'Action block',
        'class' => array('block-action'),
      ),
    ),
  );

  return $skins;
}