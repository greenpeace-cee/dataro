<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Property',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Property',
        'label' => E::ts('Dataro Property'),
        'api_entity' => 'DataroProperty',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'contact_id',
            'ask_amount',
            'channel_recommendation:label',
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
    'name' => 'SavedSearch_Dataro_Property_SearchDisplay_DataroProperty',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'DataroProperty',
        'label' => E::ts('Dataro Property'),
        'saved_search_id.name' => 'Dataro_Property',
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
                'original_field_entity' => 'DataroProperty',
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
                'original_field_entity' => 'DataroProperty',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'ask_amount',
              'dataType' => 'Money',
              'label' => E::ts('Ask Amount'),
              'spec' => [
                'name' => 'ask_amount',
                'data_type' => 'Money',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'ask_amount',
                'original_field_entity' => 'DataroProperty',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'channel_recommendation:label',
              'dataType' => 'Integer',
              'label' => E::ts('Channel Recommendation'),
              'spec' => [
                'name' => 'channel_recommendation',
                'data_type' => 'Integer',
                'suffixes' => [
                  'id',
                  'label',
                ],
                'options' => TRUE,
                'fk_entity' => NULL,
                'original_field_name' => 'channel_recommendation',
                'original_field_entity' => 'DataroProperty',
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
                'original_field_entity' => 'DataroProperty',
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
                'original_field_entity' => 'DataroProperty',
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
