<?php
// $Id$
/**
 * Implementation of themehook_settings().
 */
function boldy_settings($saved_settings) {
  $defaults = array(
    'boldy_twitter_user' => 'the_g_bomb',
    'boldy_latest_tweet' => 1,
    'boldy_facebook_link' => 'http://www.facebook.com/the.g.bomb',
    'boldy_linkedin_link' => 'http://www.linkedin.com/in/garethalexander',
    'boldy_blurb_link'    => 'contact',
  );
  $settings = array_merge($defaults, $saved_settings);

 $form['social_links'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social Links'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['social_links']['boldy_twitter_user'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter Username'),
    '#default_value' => $settings['boldy_twitter_user'],
    '#description' => t("Your twitter username."),
  );
  $form['social_links']['boldy_latest_tweet'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display Latest Tweet'),
    '#default_value' => $settings['boldy_latest_tweet'],
    '#description' => t("If checked displays the latest status update using the username above."),
  );
  $form['social_links']['boldy_facebook_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook link'),
    '#default_value' => $settings['boldy_facebook_link'],
    '#description' => t("Enter the full URL of your Facebook profile."),
  );
  $form['social_links']['boldy_linkedin_link'] = array(
    '#type' => 'textfield',
    '#title' => t('LinkedIn link'),
    '#default_value' => $settings['boldy_linkedin_link'],
    '#description' => t("Enter the full URL of your Linkedin profile."),
  );
  $form['boldy_blurb_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Request Quote Link'),
    '#default_value' => $settings['boldy_blurb_link'],
    '#description' => t("You can either enter a link manually or enter a page to point at."),
  );
 $form['footer'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer Twitter &amp; Quick Contact'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['footer']['boldy_footer_actions'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display Footer Twitter &amp; Quick Contact Section'),
    '#default_value' => $settings['boldy_footer_actions'],
    '#description' => t("If checked displays the Footer &amp; Quick COntact Section on each page."),
  );
  $form['footer']['boldy_actions_hide'] = array(
    '#type' => 'select',
    '#title' => t('Default Section Visibility'),
    '#options' => array('visible' => t('Visible'), 'hidden' => t('Hidden')),
    '#default_value' => $settings['boldy_actions_hide'],
    '#description' => t("Will the Footer Twitter &amp; Quick Contact Section be visible or hidden ."),
  );
  $form['boldy_contact_email'] = array(
    '#type' => 'textfield',
    '#title' => t('Email Address for Contact Form'),
    '#default_value' => $settings['boldy_contact_email'],
    '#description' => t("The email address you wish the contact form responses to go to."),
  );

  return $form;
}