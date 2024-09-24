<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Phone',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Phone',
        'label' => E::ts('Dataro Phone'),
        'api_entity' => 'Phone',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'contact_id',
            'phone_type_id:label',
            'ISNULL(phone) AS ISNULL_phone',
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
    'name' => 'SavedSearch_Dataro_Phone_SearchDisplay_DataroPhone',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'DataroPhone',
        'label' => E::ts('Dataro Phone'),
        'saved_search_id.name' => 'Dataro_Phone',
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
              'label' => E::ts('Phone ID'),
              'spec' => [
                'name' => 'id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'id',
                'original_field_entity' => 'Phone',
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
                'original_field_entity' => 'Phone',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'phone_type_id:label',
              'dataType' => 'Integer',
              'label' => E::ts('Phone Type'),
              'spec' => [
                'name' => 'phone_type_id',
                'data_type' => 'Integer',
                'suffixes' => [
                  'id',
                  'label',
                ],
                'options' => TRUE,
                'fk_entity' => NULL,
                'original_field_name' => 'phone_type_id',
                'original_field_entity' => 'Phone',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'ISNULL_phone',
              'dataType' => 'Boolean',
              'label' => E::ts('(Is null) Phone'),
              'spec' => [
                'name' => 'ISNULL_phone',
                'data_type' => 'Boolean',
                'suffixes' => NULL,
                'options' => FALSE,
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
