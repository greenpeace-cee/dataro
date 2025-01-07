<?php
use CRM_Dataro_ExtensionUtil as E;

return [
  'name' => 'DataroScore',
  'table' => 'civicrm_dataro_score',
  'class' => 'CRM_Dataro_DAO_DataroScore',
  'getInfo' => fn() => [
    'title' => E::ts('Dataro Score'),
    'title_plural' => E::ts('Dataro Scores'),
    'description' => E::ts('Dataro Propensity Scores'),
    'log' => TRUE,
  ],
  'getIndices' => fn() => [
    'index_unique_contact_id_model_name_id' => [
      'fields' => [
        'contact_id' => TRUE,
        'model_name_id' => TRUE,
      ],
      'unique' => TRUE,
    ],
  ],
  'getFields' => fn() => [
    'id' => [
      'title' => E::ts('ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'required' => TRUE,
      'description' => E::ts('Unique DataroScore ID'),
      'primary_key' => TRUE,
      'auto_increment' => TRUE,
    ],
    'contact_id' => [
      'title' => E::ts('Contact ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'EntityRef',
      'description' => E::ts('FK to Contact'),
      'entity_reference' => [
        'entity' => 'Contact',
        'key' => 'id',
        'on_delete' => 'CASCADE',
      ],
    ],
    'model_name_id' => [
      'title' => E::ts('Model Name'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Select',
      'required' => TRUE,
      'description' => E::ts('ID of model name'),
      'pseudoconstant' => [
        'option_group_name' => 'dataro_model_name',
      ],
    ],
    'model_score' => [
      'title' => E::ts('Model Score'),
      'sql_type' => 'decimal(7,6)',
      'input_type' => 'Number',
      'description' => E::ts('Propensity Score'),
    ],
    'model_rank' => [
      'title' => E::ts('Model Rank'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'description' => E::ts('Propensity Rank'),
    ],
    'created_date' => [
      'title' => E::ts('Created Date'),
      'sql_type' => 'timestamp',
      'input_type' => NULL,
      'required' => TRUE,
      'readonly' => TRUE,
      'default' => 'CURRENT_TIMESTAMP',
    ],
    'modified_date' => [
      'title' => E::ts('Modified Date'),
      'sql_type' => 'timestamp',
      'input_type' => NULL,
      'readonly' => TRUE,
      'default' => 'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
    ],
  ],
];
