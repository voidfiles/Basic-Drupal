<?php
// YUI theme settings file.

/**
* Implementation of THEMEHOOK_settings() function.
*
* @param $saved_settings
*   array An array of saved settings for this theme.
* @return
*   array A form array.
*/
function phptemplate_settings($saved_settings) {
  /*
   * The default values for the theme variables. Make sure $defaults exactly
   * matches the $defaults in the template.php file.
   */
  $defaults = array(
    'yui_page_width' => 'doc4',
    'yui_sidebar' => 'yui-t2',
  );

  // Merge the saved variables and their default values
  $settings = array_merge($defaults, $saved_settings);

  // Create the form widgets using Forms API
  $form['yui_page_width'] = array(
    '#type' => 'select',
    '#title' => t('Page width'),
    '#default_value' => $settings['yui_page_width'],
    '#options' => array ('doc' => '750px width, centered', 'doc2' => '950px width, centered', 'doc3' => '100% width', 'doc4' => '974px width, centered'),
  );
  $form['yui_sidebar'] = array(
    '#type' => 'select',
    '#title' => t('Sidebar'),
    '#description' => t('Location and width'),
    '#default_value' => $settings['yui_sidebar'],
    '#options' => array ('yui-t1' => '160px, on left', 'yui-t2' => '180px, on left', 'yui-t3' => '300px, on left', 'yui-t4' => '160px, on right', 'yui-t5' => '180px, on right', 'yui-t6' => '300px, on right'),
  );

  // Return the additional form widgets
  return $form;
}
