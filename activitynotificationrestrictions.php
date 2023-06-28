<?php

require_once 'activitynotificationrestrictions.civix.php';
// phpcs:disable
use CRM_Activitynotificationrestrictions_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function activitynotificationrestrictions_civicrm_config(&$config) {
  _activitynotificationrestrictions_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function activitynotificationrestrictions_civicrm_install() {
  _activitynotificationrestrictions_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function activitynotificationrestrictions_civicrm_postInstall() {
  _activitynotificationrestrictions_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function activitynotificationrestrictions_civicrm_uninstall() {
  _activitynotificationrestrictions_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function activitynotificationrestrictions_civicrm_enable() {
  _activitynotificationrestrictions_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function activitynotificationrestrictions_civicrm_disable() {
  _activitynotificationrestrictions_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function activitynotificationrestrictions_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _activitynotificationrestrictions_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function activitynotificationrestrictions_civicrm_entityTypes(&$entityTypes) {
  _activitynotificationrestrictions_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_buildForm().
 */
function activitynotificationrestrictions_civicrm_buildForm($formName, &$form) {
  if ($formName === 'CRM_Admin_Form_Preferences_Display') {
    // Adds the HTML markup to the form.
    $templatePath = realpath(dirname(__FILE__) . "/templates");
    CRM_Core_Region::instance('page-body')->add([
      'template' => "{$templatePath}/Settings.tpl",
    ]);
  }
}
