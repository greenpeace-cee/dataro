<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Segment',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Segment',
        'label' => E::ts('Dataro Segment'),
        'api_entity' => 'SegmentationIndex',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'name',
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
    'name' => 'SavedSearch_Dataro_Segment_SearchDisplay_DataroSegment',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'DataroSegment',
        'label' => E::ts('Dataro Segment'),
        'saved_search_id.name' => 'Dataro_Segment',
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
                'original_field_entity' => 'SegmentationIndex',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'name',
              'dataType' => 'String',
              'label' => E::ts('Name'),
              'spec' => [
                'name' => 'name',
                'data_type' => 'String',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'name',
                'original_field_entity' => 'SegmentationIndex',
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
