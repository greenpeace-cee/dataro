<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Properties',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Properties',
        'label' => E::ts('Dataro Properties'),
        'api_entity' => 'Contact',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'Contact_DataroProperty_contact_id_01.ask_amount',
            'Contact_DataroProperty_contact_id_01.channel_recommendation:label',
            'Contact_DataroProperty_contact_id_01.modified_date',
          ],
          'orderBy' => [],
          'where' => [],
          'groupBy' => [],
          'join' => [
            [
              'DataroProperty AS Contact_DataroProperty_contact_id_01',
              'INNER',
              [
                'id',
                '=',
                'Contact_DataroProperty_contact_id_01.contact_id',
              ],
            ],
          ],
          'having' => [],
        ],
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'SavedSearch_Dataro_Properties_SearchDisplay_Dataro_Properties_List',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Properties_List',
        'label' => E::ts('Dataro Properties List'),
        'saved_search_id.name' => 'Dataro_Properties',
        'type' => 'list',
        'settings' => [
          'style' => 'ul',
          'limit' => 0,
          'sort' => [],
          'pager' => FALSE,
          'columns' => [
            [
              'type' => 'field',
              'key' => 'Contact_DataroProperty_contact_id_01.ask_amount',
              'dataType' => 'Money',
              'break' => TRUE,
              'label' => E::ts('Ask Amount'),
              'empty_value' => 'Unknown',
            ],
            [
              'type' => 'field',
              'key' => 'Contact_DataroProperty_contact_id_01.channel_recommendation:label',
              'dataType' => 'Integer',
              'break' => TRUE,
              'label' => E::ts('Channel Recommendation'),
              'forceLabel' => TRUE,
              'empty_value' => 'Unknown',
            ],
            [
              'type' => 'field',
              'key' => 'Contact_DataroProperty_contact_id_01.modified_date',
              'dataType' => 'Timestamp',
              'break' => TRUE,
              'label' => E::ts('Last Updated'),
              'forceLabel' => TRUE,
              'empty_value' => 'Never',
            ],
          ],
          'placeholder' => 0,
          'symbol' => 'none',
        ],
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
