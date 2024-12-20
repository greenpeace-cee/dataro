<?php

/**
 * DAOs provide an OOP-style facade for reading and writing database records.
 *
 * DAOs are a primary source for metadata in older versions of CiviCRM (<5.74)
 * and are required for some subsystems (such as APIv3).
 *
 * This stub provides compatibility. It is not intended to be modified in a
 * substantive way. Property annotations may be added, but are not required.
 * @property string $id 
 * @property string $contact_id 
 * @property string $model_name_id 
 * @property string $model_score 
 * @property string $model_rank 
 * @property string $created_date 
 * @property string $modified_date 
 */
class CRM_Dataro_DAO_DataroScore extends CRM_Dataro_DAO_Base {

  /**
   * Required by older versions of CiviCRM (<5.74).
   * @var string
   */
  public static $_tableName = 'civicrm_dataro_score';

}
