<?php
use CRM_Dataro_ExtensionUtil as E;

return [
  'name' => 'DataroProperty',
  'table' => 'civicrm_dataro_property',
  'class' => 'CRM_Dataro_DAO_DataroProperty',
  'getInfo' => fn() => [
    'title' => E::ts('Dataro Property'),
    'title_plural' => E::ts('Dataro Properties'),
    'description' => E::ts('Dataro recommendation properties'),
    'log' => TRUE,
  ],
  'getFields' => fn() => [
    'id' => [
      'title' => E::ts('ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'required' => TRUE,
      'description' => E::ts('Unique DataroProperty ID'),
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

    'channel_recommendation' => [
      'title' => E::ts('Channel Recommendation'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Select',
      'required' => TRUE,
      'description' => E::ts('Recommended ask channel'),
      'pseudoconstant' => [
        'option_group_name' => 'encounter_medium',
      ],
    ],
    'ask_amount' => [
      'title' => E::ts('Ask Amount'),
      'sql_type' => 'decimal(20,2)',
      'input_type' => 'Text',
      'description' => E::ts('Recommended ask amount'),
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
  'getIndices' => fn() => [
    'index_unique_contact_id' => [
      'fields' => [
        'contact_id' => TRUE,
      ],
      'unique' => TRUE,
    ],
  ],
  'getPaths' => fn() => [],
];
