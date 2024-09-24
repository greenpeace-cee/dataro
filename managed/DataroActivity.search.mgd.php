<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Activity',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Activity',
        'label' => E::ts('Dataro Activity'),
        'api_entity' => 'Activity',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'activity_type_id:label',
            'source_record_id',
            'activity_date_time',
            'activity_hierarchy.parent_activity_id',
            'campaign_id:label',
            'created_date',
            'modified_date',
          ],
          'orderBy' => [],
          'where' => [
            [
              'OR',
              [
                [
                  'is_deleted',
                  '=',
                  TRUE,
                ],
                [
                  'is_deleted',
                  '=',
                  FALSE,
                ],
              ],
            ],
          ],
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
    'name' => 'SavedSearch_Dataro_Activity_SearchDisplay_DataroActivity',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'DataroActivity',
        'label' => E::ts('Dataro Activity'),
        'saved_search_id.name' => 'Dataro_Activity',
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
              'label' => E::ts('Activity ID'),
              'spec' => [
                'name' => 'id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'id',
                'original_field_entity' => 'Activity',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'activity_type_id:label',
              'dataType' => 'Integer',
              'label' => E::ts('Activity Type'),
              'spec' => [
                'name' => 'activity_type_id',
                'data_type' => 'Integer',
                'suffixes' => [
                  'id',
                  'label',
                ],
                'options' => TRUE,
                'fk_entity' => NULL,
                'original_field_name' => 'activity_type_id',
                'original_field_entity' => 'Activity',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'source_record_id',
              'dataType' => 'Integer',
              'label' => E::ts('Source Record'),
              'spec' => [
                'name' => 'source_record_id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'source_record_id',
                'original_field_entity' => 'Activity',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'activity_date_time',
              'dataType' => 'Timestamp',
              'label' => E::ts('Activity Date'),
              'spec' => [
                'name' => 'activity_date_time',
                'data_type' => 'Timestamp',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'activity_date_time',
                'original_field_entity' => 'Activity',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'activity_hierarchy.parent_activity_id',
              'dataType' => 'Integer',
              'label' => E::ts('Activity Hierarchy: Parent Activity ID'),
              'spec' => [
                'name' => 'activity_hierarchy_parent_activity_id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'activity_hierarchy.parent_activity_id',
                'original_field_entity' => 'Activity',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'campaign_id:label',
              'dataType' => 'Integer',
              'label' => E::ts('Campaign'),
              'spec' => [
                'name' => 'campaign_id',
                'data_type' => 'Integer',
                'suffixes' => [
                  'id',
                  'label',
                ],
                'options' => TRUE,
                'fk_entity' => 'Campaign',
                'original_field_name' => 'campaign_id',
                'original_field_entity' => 'Activity',
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
                'original_field_entity' => 'Activity',
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
                'original_field_entity' => 'Activity',
              ],
            ],
          ],
        ],
      ],
      'match' => [
        'saved_search_id',
        'name',
      ],
    ],
  ],
];
