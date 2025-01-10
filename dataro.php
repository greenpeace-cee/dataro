<?php

require_once 'dataro.civix.php';

use CRM_Dataro_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function dataro_civicrm_config(&$config): void {
  _dataro_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function dataro_civicrm_install(): void {
  _dataro_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function dataro_civicrm_enable(): void {
  _dataro_civix_civicrm_enable();
}

function dataro_civicrm_permission(array &$permissions): void {
  $permissions['access dataro entities'] = [
    'label' => E::ts('Access Dataro Entities'), // Required
    'description' => E::ts('Access API entities used by the Dataro connector'),
  ];
  $permissions['access dataro scores'] = [
    'label' => E::ts('Access Dataro Scores'), // Required
    'description' => E::ts('Access Dataro Scores and Properties'),
  ];
}

function dataro_civicrm_merge($type, &$data, $mainId = NULL, $otherId = NULL, $tables = NULL) {
  if ($type == 'sqls') {
    // remove UPDATE against civicrm_dataro_score and civicrm_dataro_property as
    // it would fail due to the unique index on contact_id
    $data = array_filter($data, function($sql) {
      return strpos($sql, 'UPDATE civicrm_dataro_score') === FALSE && strpos($sql, 'UPDATE civicrm_dataro_property') === FALSE;
    });
  }
}

function dataro_civicrm_selectWhereClause($entity, &$clauses, $userId, $conditions) {
  if (in_array($entity, ['DataroScore', 'DataroProperty'])) {
    if (!CRM_Core_Permission::check('access dataro scores', $userId)) {
      return;
    }
    if (isset($clauses['contact_id'])) {
      // Remove ACL checks on contact_id. This allows direct access to
      // DataroProperty/DataroScore.get APIs as well as .save APIs making use of
      // "match":["contact_id"] for restricted users.
      // This does *NOT* provide access to the Contact entity directly through
      // joins or similar
      unset($clauses['contact_id']);
    }
  }
}
