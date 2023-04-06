<?php

require_once 'jobtitleinrel.civix.php';
// phpcs:disable
use CRM_Jobtitleinrel_ExtensionUtil as E;
// phpcs:enable

function jobtitleinrel_civicrm_post($op, $objectName, $objectId, &$objectRef) {
  if ($objectName == 'Individual' && ($op == 'edit' || $op == 'create')) {
    CRM_Jobtitleinrel_Helper::storeJobTitleInEmployerRelationship($objectId);
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function jobtitleinrel_civicrm_config(&$config): void {
  _jobtitleinrel_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function jobtitleinrel_civicrm_install(): void {
  _jobtitleinrel_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function jobtitleinrel_civicrm_postInstall(): void {
  _jobtitleinrel_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function jobtitleinrel_civicrm_uninstall(): void {
  _jobtitleinrel_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function jobtitleinrel_civicrm_enable(): void {
  CRM_Jobtitleinrel_Helper::addAll();

  _jobtitleinrel_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function jobtitleinrel_civicrm_disable(): void {
  _jobtitleinrel_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function jobtitleinrel_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _jobtitleinrel_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function jobtitleinrel_civicrm_entityTypes(&$entityTypes): void {
  _jobtitleinrel_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function jobtitleinrel_civicrm_preProcess($formName, &$form): void {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function jobtitleinrel_civicrm_navigationMenu(&$menu): void {
//  _jobtitleinrel_civix_insert_navigation_menu($menu, 'Mailings', [
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ]);
//  _jobtitleinrel_civix_navigationMenu($menu);
//}
