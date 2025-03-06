<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Activity_Contact_Segmentation',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Activity_Contact_Segmentation',
        'label' => E::ts('Dataro Activity Contact Segmentation'),
        'api_entity' => 'ActivityContactSegmentation',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'activity_contact_id',
            'segment_id',
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
    'name' => 'SavedSearch_Dataro_Activity_Contact_Segmentation_SearchDisplay_DataroActivityContactSegmentation',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'DataroActivityContactSegmentation',
        'label' => E::ts('Dataro Activity Contact Segmentation'),
        'saved_search_id.name' => 'Dataro_Activity_Contact_Segmentation',
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
                'original_field_entity' => 'ActivityContactSegmentation',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'activity_contact_id',
              'dataType' => 'Integer',
              'label' => E::ts('Activity Contact ID'),
              'spec' => [
                'name' => 'activity_contact_id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => 'ActivityContact',
                'original_field_name' => 'activity_contact_id',
                'original_field_entity' => 'ActivityContactSegmentation',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'segment_id',
              'dataType' => 'Integer',
              'label' => E::ts('Segment ID'),
              'spec' => [
                'name' => 'segment_id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => 'SegmentationIndex',
                'original_field_name' => 'segment_id',
                'original_field_entity' => 'ActivityContactSegmentation',
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
