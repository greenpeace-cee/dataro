<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Score',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Score',
        'label' => E::ts('Dataro Score'),
        'api_entity' => 'DataroScore',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'contact_id',
            'model_name_id:label',
            'model_rank',
            'model_score',
            'created_date',
            'modified_date',
          ],
          'orderBy' => [],
          'where' => [],
          'groupBy' => [],
          'join' => [],
          'having' => [],
        ],
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'SavedSearch_Dataro_Score_SearchDisplay_DataroScore',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'DataroScore',
        'label' => E::ts('Dataro Score'),
        'saved_search_id.name' => 'Dataro_Score',
        'type' => 'entity',
        'settings' => [
          'sort' => [
            [
              'id',
              'ASC',
            ],
          ],
          'columns' => [
            [
              'type' => 'field',
              'key' => 'id',
              'dataType' => 'Integer',
              'label' => E::ts('ID'),
              'spec' => [
                'name' => 'id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'id',
                'original_field_entity' => 'DataroScore',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'contact_id',
              'dataType' => 'Integer',
              'label' => E::ts('Contact ID'),
              'spec' => [
                'name' => 'contact_id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => 'Contact',
                'original_field_name' => 'contact_id',
                'original_field_entity' => 'DataroScore',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'model_name_id:label',
              'dataType' => 'Integer',
              'label' => E::ts('Model Name'),
              'spec' => [
                'name' => 'model_name_id',
                'data_type' => 'Integer',
                'suffixes' => [
                  'id',
                  'label',
                ],
                'options' => TRUE,
                'fk_entity' => NULL,
                'original_field_name' => 'model_name_id',
                'original_field_entity' => 'DataroScore',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'model_rank',
              'dataType' => 'Integer',
              'label' => E::ts('Model Rank'),
              'spec' => [
                'name' => 'model_rank',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'model_rank',
                'original_field_entity' => 'DataroScore',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'model_score',
              'dataType' => 'Money',
              'label' => E::ts('Model Score'),
              'spec' => [
                'name' => 'model_score',
                'data_type' => 'Money',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'model_score',
                'original_field_entity' => 'DataroScore',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'created_date',
              'dataType' => 'Timestamp',
              'label' => E::ts('Created Date'),
              'spec' => [
                'name' => 'created_date',
                'data_type' => 'Timestamp',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'created_date',
                'original_field_entity' => 'DataroScore',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'modified_date',
              'dataType' => 'Timestamp',
              'label' => E::ts('Modified Date'),
              'spec' => [
                'name' => 'modified_date',
                'data_type' => 'Timestamp',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'modified_date',
                'original_field_entity' => 'DataroScore',
              ],
            ],
          ],
        ],
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
