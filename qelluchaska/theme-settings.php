<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function qelluchaska_form_system_theme_settings_alter(&$form, &$form_state)  {

  // Create the form using Forms API: http://api.drupal.org/api/7

  /* -- Delete this line if you want to use this setting
  $form['qelluchaska_example'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('qelluchaska sample setting'),
    '#default_value' => theme_get_setting('qelluchaska_example'),
    '#description'   => t("This option doesn't do anything; it's just an example."),
  );
  // */
  global $base_root;
  
  $form['og'] = array(
    '#type' => 'fieldset',
    '#title' => t('Open Graph Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#weight' => 0,
  );
  $form['og']['og:url'] = array(
    '#type' => 'textfield',
    '#title' => t('OpenGraph URL'),
    '#default_value' => theme_get_setting('og:url'),
  );
  $form['og']['og:title'] = array(
    '#type' => 'textfield',
    '#title' => t('OpenGraph Title and Site Name'),
    '#default_value' => theme_get_setting('og:title'),
  );
  $form['og']['og:image'] = array(
    '#type' => 'textfield',
    '#title' => t('OpenGraph Image'),
    '#size' => 100,
    '#default_value' => theme_get_setting('og:image'),
  );
  $form['og']['og:description'] = array(
    '#type' => 'textarea',
    '#title' => t('OpenGraph Description'),
    '#default_value' => theme_get_setting('og:description'),
  );

  // Remove some of the base theme's settings.
  unset($form['themedev']['zen_layout']); // We don't need to select the layout stylesheet.

  // We are editing the $form in place, so we don't need to return anything.
}
