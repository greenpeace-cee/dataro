<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Address',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Address',
        'label' => E::ts('Dataro Address'),
        'api_entity' => 'Address',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'contact_id',
            'country_id:label',
            'postal_code',
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
    'name' => 'SavedSearch_Dataro_Address_SearchDisplay_DataroAddress',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'DataroAddress',
        'label' => E::ts('Dataro Address'),
        'saved_search_id.name' => 'Dataro_Address',
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
              'label' => E::ts('Address ID'),
              'spec' => [
                'name' => 'id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'id',
                'original_field_entity' => 'Address',
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
                'original_field_entity' => 'Address',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'country_id:label',
              'dataType' => 'Integer',
              'label' => E::ts('Country'),
              'spec' => [
                'name' => 'country_id',
                'data_type' => 'Integer',
                'suffixes' => [
                  'id',
                  'label',
                ],
                'options' => TRUE,
                'fk_entity' => 'Country',
                'original_field_name' => 'country_id',
                'original_field_entity' => 'Address',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'postal_code',
              'dataType' => 'String',
              'label' => E::ts('Postal Code'),
              'spec' => [
                'name' => 'postal_code',
                'data_type' => 'String',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'postal_code',
                'original_field_entity' => 'Address',
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
