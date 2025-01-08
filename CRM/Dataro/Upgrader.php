<?php

use CRM_Dataro_ExtensionUtil as E;

/**
 * Collection of upgrade steps.
 */
class CRM_Dataro_Upgrader extends CRM_Extension_Upgrader_Base {

  /**
   * Create DataroProperty table
   *
   * @return TRUE on success
   * @throws CRM_Core_Exception
   */
  public function upgrade_1100(): bool {
    $this->ctx->log->info('Creating civicrm_dataro_property');
    CRM_Core_DAO::executeQuery("CREATE TABLE IF NOT EXISTS `civicrm_dataro_property` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique DataroProperty ID',
      `contact_id` int(10) unsigned NOT NULL COMMENT 'FK to Contact',
      `channel_recommendation` int(10) unsigned DEFAULT NULL COMMENT 'Recommended ask channel',
      `ask_amount` decimal(20,2) DEFAULT NULL COMMENT 'Recommended ask amount',
      `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
      `modified_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
      PRIMARY KEY (`id`),
      UNIQUE KEY `index_unique_contact_id` (`contact_id`),
      CONSTRAINT `FK_civicrm_dataro_property_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE
    );");
    $logging = new CRM_Logging_Schema();
    $logging->fixSchemaDifferences();
    return TRUE;
  }

}
