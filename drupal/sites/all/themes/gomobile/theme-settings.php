<?php

function gomobile_form_system_theme_settings_alter(&$form, $form_state) {

  $form['advansed_theme_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Advansed Theme Settings'),
  );
/*
  $form['advansed_theme_settings']['tm_skin'] = array(
    '#type' => 'select',
    '#title' => t('Theme Skin'),
    '#default_value' => theme_get_setting('tm_skin'),
    '#options' => array (
      0 => t('Blue'),
	  1 => t('Green'),
	  2 => t('Red'),
    ),
  );
  */
  $form['advansed_theme_settings']['tm_portfolio'] = array(
    '#type' => 'select',
    '#title' => t('Portfolio'),
    '#default_value' => theme_get_setting('tm_portfolio'),
    '#options' => array (
      1 => t('2 Column'),
	    2 => t('3 Column'),
	    3 => t('4 Column'),
    ),
  );

  $form['advansed_theme_settings']['socacc'] = array(
    '#type' => 'fieldset',
    '#title' => t('Accounts'),
  );

  $form['advansed_theme_settings']['socacc']['tm_twitter'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter'),
    '#default_value' => theme_get_setting('tm_twitter'),
  );
  $form['advansed_theme_settings']['socacc']['tm_flickr'] = array(
    '#type' => 'textfield',
    '#title' => t('Flickr'),
    '#default_value' => theme_get_setting('tm_flickr'),
  );
  $form['advansed_theme_settings']['socacc']['tm_ac_setting_1'] = array(
    '#type' => 'textfield',
    '#title' => t('FaceBook'),
    '#default_value' => theme_get_setting('tm_ac_setting_1'), '#description' => t('Enter the link to your account without http://facebook.com'),
  );
  $form['advansed_theme_settings']['socacc']['tm_ac_setting_2'] = array(
    '#type' => 'textfield',
    '#title' => t('Google'),
    '#default_value' => theme_get_setting('tm_ac_setting_2'), '#description' => t('Enter the link to your account without http://google.com'),
  );
  $form['advansed_theme_settings']['socacc']['tm_ac_setting_3'] = array(
    '#type' => 'textfield',
    '#title' => t('Dribbble'),
    '#default_value' => theme_get_setting('tm_ac_setting_3'), '#description' => t('Enter the link to your account without http://dribbble.com'),
  );
  $form['advansed_theme_settings']['socacc']['tm_linkedin'] = array(
    '#type' => 'textfield',
    '#title' => t('Linkedin'),
    '#default_value' => theme_get_setting('tm_linkedin'), '#description' => t('Enter the link to your account without http://linkedin.com'),
  );
}

