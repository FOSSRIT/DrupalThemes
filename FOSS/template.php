<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */


// function foss_preprocess_html(&$variables) {
  // drupal_add_css('http://fonts.googleapis.com/css?family=News+Cycle', array('type' => 'external'));
  // drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600', array('type' => 'external'));
	// <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet' type='text/css'>
// }

// function foss_css_alter(&$css) {
//   $exclude = array(
//     'modules/aggregator/aggregator.css' => FALSE,
//     'modules/block/block.css' => FALSE,
//     'modules/book/book.css' => FALSE,
//     'modules/comment/comment.css' => FALSE,
//     'modules/dblog/dblog.css' => FALSE,
//     'modules/file/file.css' => FALSE,
//     'modules/filter/filter.css' => FALSE,
//     'modules/forum/forum.css' => FALSE,
//     'modules/help/help.css' => FALSE,
//     'modules/menu/menu.css' => FALSE,
//     'modules/node/node.css' => FALSE,
//     'modules/openid/openid.css' => FALSE,
//     'modules/poll/poll.css' => FALSE,
//     'modules/profile/profile.css' => FALSE,
//     'modules/search/search.css' => FALSE,
//     'modules/statistics/statistics.css' => FALSE,
//     'modules/syslog/syslog.css' => FALSE,
//     'modules/system/admin.css' => FALSE,
//     'modules/system/maintenance.css' => FALSE,
//     'modules/system/system.css' => FALSE,
//     'modules/system/system.admin.css' => FALSE,
//     'modules/system/system.base.css' => FALSE,
//     'modules/system/system.maintenance.css' => FALSE,
//     'modules/system/system.menus.css' => FALSE,
//     'modules/system/system.messages.css' => FALSE,
//     'modules/system/system.theme.css' => FALSE,
//     'modules/taxonomy/taxonomy.css' => FALSE,
//     'modules/tracker/tracker.css' => FALSE,
//     'modules/update/update.css' => FALSE,
//     'modules/user/user.css' => FALSE,
//   );
//   $css = array_diff_key($css, $exclude);
// }



// function foss_preprocess_html() {
//   // Uncomment the following line to remove all existing Drupal core styles and module styles.
//   drupal_static_reset('drupal_add_css');
//   // Get the path to mytheme
//   $path = drupal_get_path('theme', 'FOSS');
//   // Load CSS reset before all other stylesheets
//   // drupal_add_css("$path/css/global.css", array('group' => CSS_SYSTEM, 'every_page' => true, weight => -1000 ));
//   // Load your theme's styles after all other styles. (So you can override Drupal core styles and other module styles).
//   drupal_add_css("$path/css/global.css", array('group' => CSS_THEME, 'every_page' => true, 'weight' => 9999));
// }

// function foss_preprocess_html() {
//   // Uncomment the following line to remove all existing Drupal core styles and module styles.
//   drupal_static_reset('drupal_add_css');
//   // Get the path to mytheme
//   $path = drupal_get_path('theme', 'mytheme');
//   // Load CSS reset before all other stylesheets
//   drupal_add_css("$path/reset.css", array('group' => CSS_SYSTEM, 'every_page' => true, weight => -1000 ));
//   // Load your theme's styles after all other styles. (So you can override Drupal core styles and other module styles).
//   drupal_add_css("$path/mytheme.css", array('group' => CSS_THEME, 'every_page' => true, 'weight' => 9999));
// }

// function hook_css_alter(&$css) {
  // Remove defaults.css file.
  // unset($css[drupal_get_path('module', 'system') . '/defaults.css']);
  // unset($css[drupal_get_path('module', 'system') . '/defaults.css']);
// }
