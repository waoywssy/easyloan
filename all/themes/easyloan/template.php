<?php 

/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 * 
 * Complete documentation for this file is available online. 
 * @see https://drupal.org/node/1728096 
 */ 
function easyloan_theme() {  
  $path = drupal_get_path('theme', 'easyloan') . '/templates'; 

  return array(
    'user_login' => array(
        'path'                 => $path,
        'template'             => 'login', 
        'render element'       => 'form', 
        //'arguments'          => array('form' => NULL), 
        'preprocess functions' => array('easyloan_preprocess_user_login'), ),

    'user_pass' => array(
        'path'                   => $path, 
        'template'               => 'findpsw',  
        'render element'         => 'form', 
        //'arguments'            => array('form' => NULL), 
        //'preprocess functions' => array('easyloan_preprocess_user_pass'), 
        ),

    'form_easyloan_wizard' => array(
        //'user_register_form' => array(
        'path'                 => $path, 
        'template'             => 'user-register',
        'render element'       => 'form',
        'preprocess functions' => array('easyloan_preprocess_user_register_form'),
        //'file' => ''
        ),

    'about' => array(
        'path'     => $path . '/about', 
        'template' => 'about',),
    'about-news' => array(
        'path'     => $path . '/about', 
        'template' => 'news',),
    'about-news-detail' => array(
        'path'     => $path . '/about', 
        'template' => 'news-detail',),
    'about-notices' => array(
        'path'     => $path . '/about', 
        'template' => 'notices',),
    'about-notices-detail' => array(
        'path'     => $path . '/about', 
        'template' => 'notices-detail',),

    'about-invite' => array(
        'path'     => $path . '/about', 
        'template' => 'invite',),
    'about-contact' => array(
        'path'     => $path . '/about', 
        'template' => 'contact',),

    'helpcenter' => array(
        'path'     => $path . '/help', 
        'template' => 'help',),
    'help-account' => array(
        'path'     => $path . '/help',
        'template' => 'account',),
    'help-intro' => array(
        'path'     => $path . '/help',
        'template' => 'intro',),
    'help-fee' => array(
        'path'     => $path . '/help',
        'template' => 'fee',),
    'help-borrow' => array(
        'path'     => $path . '/help',
        'template' => 'borrow',),
    'help-invest' => array(
        'path'     => $path . '/help',
        'template' => 'invest',),

    'guide' => array(
        'path'     => $path . '/guide',
        'template' => 'guide',),
    'guide-borrow' => array(
        'path'     => $path . '/guide',
        'template' => 'borrow',),
    'guide-security' => array(
        'path'     => $path . '/guide',
        'template' => 'security',),
    'lend' => array(
        'path'     => $path,
        'template' => 'lend',),
    'lend-detail' => array(
        'path'     => $path,
        'template' => 'lend-detail',),
    'notfound' => array(
        'path'     => $path,
        'template' => 'notfound',),

    'borrow' => array(
        'path'     => $path . '/borrow',
        'template' => 'borrow',),
    'borrow-estate' => array(
        'path'     => $path . '/borrow',
        'template' => 'estate',),
    'borrow-gold' => array(
        'path'     => $path . '/borrow',
        'template' => 'gold',),
    'borrow-car' => array(
        'path'     => $path . '/borrow',
        'template' => 'car',),
    'borrow-else' => array(
        'path'     => $path . '/borrow',
        'template' => 'else',),
    'borrow-estate-apply' => array(
        'path'     => $path . '/borrow',
        'template' => 'estate-apply',),
    'borrow-gold-apply' => array(
        'path'     => $path . '/borrow',
        'template' => 'gold-apply',),
    'borrow-car-apply' => array(
        'path'     => $path . '/borrow',
        'template' => 'car-apply',),
    'borrow-else-apply' => array(
        'path'     => $path . '/borrow',
        'template' => 'else-apply',),

    'account-recharge' => array(
        'path'     => $path . '/account',
        'template' => 'recharge',),
    'account-withdraw' => array(
        'path'     => $path . '/account',
        'template' => 'withdraw',),
    'account-capital' => array(
        'path'     => $path . '/account',
        'template' => 'capital',),

    'account-invest' => array(
        'path'     => $path . '/account',
        'template' => 'invest',),
    'account-investplan' => array(
        'path'     => $path . '/account',
        'template' => 'investplan',), 

    'account-myloan' => array(
        'path'     => $path . '/account',
        'template' => 'myloan',),
    'account-basicinfo' => array(
        'path'     => $path . '/account',
        'template' => 'basicinfo',),
    'account-security' => array(
        'path'     => $path . '/account',
        'template' => 'security',),
    'account-bankcard' => array(
        'path'     => $path . '/account',
        'template' => 'bankcard',),
    'account-settings' => array(
        'path'     => $path . '/account',
        'template' => 'settings',),
    'account-management' => array(
        'path'     => $path . '/account',
        'template' => 'management',),
    'account-management-user' => array(
        'path'     => $path . '/account',
        'template' => 'management-user',),

    'management-applications' => array(
        'path'     => $path . '/account',
        'template' => 'applications',),

    'management-accountsindebt' => array(
        'path'     => $path . '/account',
        'template' => 'accountsindebt',),
    'management-accountsindebt-detail' => array(
        'path'     => $path . '/account',
        'template' => 'accountsindebt-detail',),
    'management-readytolend' => array(
        'path'     => $path . '/account',
        'template' => 'readytolend',),
    'management-readytolend-detail' => array(
        'path'     => $path . '/account',
        'template' => 'readytolend-detail',),
    'management-withdrawappl' => array(
        'path'     => $path . '/account',
        'template' => 'withdrawappl',),
    'management-createinvestplan' => array(
        'path'     => $path . '/account',
        'template' => 'createinvestplan',),
    );
}


function easyloan_form_alter(&$form, &$form_state, $form_id) {

    if($form_id == 'form_easyloan_wizard'){
        $ui_button = array('ui-button', 'ui-button-blue', 'ui-button-mid');

        if ($form_state['step'] == 1) {

            $form['account']['mail']['#value'] = "a@b.com"; // set to a fake value to cheat the validation for email
            $form['account']['phone'] = array( 
                    '#title' => t('手机号'), 
                    '#type' => 'textfield', 
                    '#description' => t('请输入11位手机号码'), 
                    '#size' => 11, 
                    '#weight' => 10,); 

            $form['actions']['submit']['#attributes']['class'] = $ui_button; 
            $form['next']['#attributes']['class'] = $ui_button;

            // when press 'previous' button, save the submitted user name and phone 
            if (array_key_exists('step_information', $form_state) && 
                    array_key_exists('stored_values', $form_state['step_information'][1])
                ) {
                $form['account']['name']['#value']  = $form_state['step_information'][1]['stored_values']['name'];
                $form['account']['phone']['#value'] = $form_state['step_information'][1]['stored_values']['phone'];
            }

            // Clean up the form a bit by removing 'create new account' submit button
            unset($form['actions']); 
        } else if ($form_state['step'] == 2) {
            $form['prev']['#attributes']['class']   = $ui_button;
            $form['finish']['#attributes']['class'] = $ui_button;
        }
    }
}

/*
 * The following two methods are really heart-bleeding bug for the developer himself T_T
 * 
 */
function easyloan_preprocess_user_register_form(&$variables){
        $variables['classes_array']            =array(' ');
        $variables['attributes_array']         =array(' ');
        $variables['title_attributes_array']   =array(' ');
        $variables['content_attributes_array'] =array(' ');
}
function easyloan_preprocess_user_login(&$variables){
        $variables['classes_array']            =array(' ');
        $variables['attributes_array']         =array(' ');
        $variables['title_attributes_array']   =array(' ');
        $variables['content_attributes_array'] =array(' ');
}
/*  // to find out the caller method
    if ($elements['#theme'][0] == 'form_easyloan_wizard'){
      $caller = null;
      list(, $caller) = debug_backtrace(false);
      //var_dump($caller);
    }
    */

/*
 * This method provides us with page template override for certain node types.
 */
function easyloan_preprocess_page(&$vars, $hook) {
  if (isset($vars['node'])) {
  // If the node type is "notice" the template suggestion will be "page--notice.tpl.php".
   $vars['theme_hook_suggestions'][] = 'page__'. str_replace('_', '--', $vars['node']->type);
  }
}