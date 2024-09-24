<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Activity_Contact',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Activity_Contact',
        'label' => E::ts('Dataro Activity Contact'),
        'api_entity' => 'DataroActivityContact',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'activity_id',
            'contact_id',
            'record_type_id:label',
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
    'name' => 'SavedSearch_Dataro_Activity_Contact_SearchDisplay_DataroActivityContact',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'DataroActivityContact',
        'label' => E::ts('Dataro Activity Contact'),
        'saved_search_id.name' => 'Dataro_Activity_Contact',
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
              'label' => E::ts('Activity Contact ID'),
              'spec' => [
                'name' => 'id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'id',
                'original_field_entity' => 'ActivityContact',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'activity_id',
              'dataType' => 'Integer',
              'label' => E::ts('Activity ID'),
              'spec' => [
                'name' => 'activity_id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => 'Activity',
                'original_field_name' => 'activity_id',
                'original_field_entity' => 'ActivityContact',
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
                'original_field_entity' => 'ActivityContact',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'record_type_id:label',
              'dataType' => 'Integer',
              'label' => E::ts('Contact Role'),
              'spec' => [
                'name' => 'record_type_id',
                'data_type' => 'Integer',
                'suffixes' => [
                  'id',
                  'label',
                ],
                'options' => TRUE,
                'fk_entity' => NULL,
                'original_field_name' => 'record_type_id',
                'original_field_entity' => 'ActivityContact',
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
