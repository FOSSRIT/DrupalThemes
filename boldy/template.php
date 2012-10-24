<?php
// $Id$

/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */
function boldy_body_class($left) {
  if ($left != '') {
    $class = 'sidebar-left';
  }

  if (isset($class)) {
    print ' class="'. $class .'"';
  }
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function boldy_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' › ', $breadcrumb) .'</div>';
  }
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function boldy_preprocess_page(&$vars) {
  $vars['tabs2'] = menu_secondary_local_tasks();

  // Hook into color.module
  if (module_exists('color')) {
    _color_page_alter($vars);
  }
  // Classes for body element. Allows advanced theming based on context
  // (home page, node of certain type, etc.)
  $classes = explode(' ', $vars['body_classes']);
  // Remove the mostly useless page-ARG0 class.
  if ($index = array_search(preg_replace('![^abcdefghijklmnopqrstuvwxyz0-9-_]+!s', '', 'page-'. drupal_strtolower(arg(0))), $classes)) {
    unset($classes[$index]);
  }
  if (!$vars['is_front']) {
    // Add unique class for each page.
    $path = drupal_get_path_alias($_GET['q']);
    $classes[] = boldy_id_safe('page-' . $path);
    // Add unique class for each website section.
    list($section, ) = explode('/', $path, 2);
    if (arg(0) == 'node') {
      if (arg(1) == 'add') {
        $section = 'node-add';
      }
      elseif (is_numeric(arg(1)) && (arg(2) == 'edit' || arg(2) == 'delete')) {
        $section = 'node-' . arg(2);
      }
    }
    $classes[] = boldy_id_safe('section-' . $section);
  }
  $vars['body_classes_array'] = $classes;
  $vars['body_classes'] = implode(' ', $classes); // Concatenate with spaces.
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function boldy_preprocess_node(&$vars, $hook) {
  // Special classes for nodes
  $classes = array('node');
  if ($vars['sticky']) {
    $classes[] = 'sticky';
  }
  if (!$vars['status']) {
    $classes[] = 'node-unpublished';
    $vars['unpublished'] = TRUE;
  }
  else {
    $vars['unpublished'] = FALSE;
  }
  if ($vars['uid'] && $vars['uid'] == $GLOBALS['user']->uid) {
    $classes[] = 'node-mine'; // Node is authored by current user.
  }
  if ($vars['teaser']) {
    $classes[] = 'node-teaser'; // Node is displayed as teaser.
  }
  // Class for node type: "node-type-page", "node-type-story", "node-type-my-custom-type", etc.
  $classes[] = boldy_id_safe('node-type-' . $vars['type']);
  $vars['classes'] = implode(' ', $classes); // Concatenate with spaces

}

/**
 * Add a "Comments" heading above comments except on forum pages.
 */
function boldy_preprocess_comment_wrapper(&$vars) {
  if ($vars['content'] && $vars['node']->type != 'forum') {
    $vars['content'] = '<h2 class="comments">'. t('Comments') .'</h2>'.  $vars['content'];
  }
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs. Overridden to split the secondary tasks.
 *
 * @ingroup themeable
 */
function boldy_menu_local_tasks() {
  return menu_primary_local_tasks();
}

/**
 * Returns the themed submitted-by string for the comment.
 */
function boldy_comment_submitted($comment) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $comment),
      '!datetime' => format_date($comment->timestamp)
    ));
}

/**
 * Returns the themed submitted-by string for the node.
 */
function boldy_node_submitted($node) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $node),
      '!datetime' => format_date($node->created),
    ));
}

/**
 * Generates IE CSS links for LTR and RTL languages.
 */
function boldy_get_ie_styles() {
  global $language;

  $iecss = '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/fix-ie.css" />';
  if ($language->direction == LANGUAGE_RTL) {
    $iecss .= '<style type="text/css" media="all">@import "'. base_path() . path_to_theme() .'/fix-ie-rtl.css";</style>';
  }

  return $iecss;
}

/**
 * Override the search box to add our pretty graphic instead of the button.
 */
function boldy_search_theme_form($form) {
  $form['submit']['#value'] = '';
  return '<div id="search" class="container-inline">' . drupal_render($form) . '</div>';
}

/**
 * Implementation of hook_theme.
 */
function boldy_theme() {
  return array(
    'contact_mail_page_1' => array(
      'arguments' => array('form' => NULL),
    ),
  );
}

/**
 * Hide comment links on teaser views
 */
function boldy_links($links) {
  if (count($links)>0){
    if (isset($links["node_read_more"])){
      if (isset($links["comment_add"])) {
        unset($links["comment_add"]);
      }
      if (isset($links["comment_comments"])) {
        unset($links["comment_comments"]);
      }
    }
  }
  return theme_links($links);
}

/**
 * Modify the form with the ID "contact_mail_page1"
 */
function boldy_contact_mail_page_1($form) {
  // Remove the "Additional information" from the form
  // dsm($form);
  unset($form['contact_information']);
  $name = drupal_render($form['name']);
  $mail = drupal_render($form['mail']);
  $subject = drupal_render($form['subject']);
  $message = drupal_render($form['message']);
  $copy = drupal_render($form['copy']);
  $submit = drupal_render($form['submit']);
  $everything_else = drupal_render($form);
  return "<div class='leftSide'>". $name . $mail . $subject . $submit ."</div><div class='rightSide'>". $message . $copy ."</div>". $everything_else;
  // return drupal_render($form);
}

/**
 * Converts a string to a suitable html ID attribute.
 *
 * http://www.w3.org/TR/html4/struct/global.html#h-7.5.2 specifies what makes a
 * valid ID attribute in HTML. This function:
 *
 * - Ensure an ID starts with an alpha character by optionally adding an 'id'.
 * - Replaces any character except alphanumeric characters with dashes.
 * - Converts entire string to lowercase.
 *
 * @param $string
 *   The string
 * @return
 *   The converted string
 */
function boldy_id_safe($string) {
  // Replace with dashes anything that isn't A-Z, numbers, dashes, or underscores.
  return strtolower(preg_replace('/[^a-zA-Z0-9-]+/', '-', $string));
}

/*******************************
  CONTACT FORM 
********************************/

 function boldy_hexstr($hexstr) {
  $hexstr = str_replace(' ', '', $hexstr);
  $hexstr = str_replace('\x', '', $hexstr);
  $retstr = pack('H*', $hexstr);
  return $retstr;
}

function boldy_strhex($string) {
  $hexstr = unpack('H*', $string);
  return array_shift($hexstr);
}
