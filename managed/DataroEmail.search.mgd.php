<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Email',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Email',
        'label' => E::ts('Dataro Email'),
        'api_entity' => 'Email',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'contact_id',
            'ISNULL(email) AS ISNULL_email',
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
    'name' => 'SavedSearch_Dataro_Email_SearchDisplay_DataroEmail',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'DataroEmail',
        'label' => E::ts('Dataro Email'),
        'saved_search_id.name' => 'Dataro_Email',
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
              'label' => E::ts('Email ID'),
              'spec' => [
                'name' => 'id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'id',
                'original_field_entity' => 'Email',
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
                'original_field_entity' => 'Email',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'ISNULL_email',
              'dataType' => 'Boolean',
              'label' => E::ts('(Is null) Email'),
              'spec' => [
                'name' => 'ISNULL_email',
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
