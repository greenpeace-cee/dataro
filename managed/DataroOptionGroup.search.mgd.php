<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Option_Group',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Option_Group',
        'label' => E::ts('Dataro Option Group'),
        'api_entity' => 'OptionGroup',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'name',
            'title',
            'option_value_fields:label',
          ],
          'orderBy' => [],
          'where' => [
            [
              'name',
              'IN',
              [
                'campaign_type',
                'campaign_status',
                'activity_type',
                'payment_instrument',
                'phone_type',
                'contribution_status',
                'contribution_recur_status',
                'activity_contacts',
                'contract_cancel_reason',
                'dataro_model_name',
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
    'name' => 'SavedSearch_Dataro_Option_Group_SearchDisplay_DataroOptionGroup',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'DataroOptionGroup',
        'label' => E::ts('Dataro Option Group'),
        'saved_search_id.name' => 'Dataro_Option_Group',
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
              'label' => E::ts('Option Group ID'),
              'spec' => [
                'name' => 'id',
                'data_type' => 'Integer',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'id',
                'original_field_entity' => 'OptionGroup',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'name',
              'dataType' => 'String',
              'label' => E::ts('Option Group Name'),
              'spec' => [
                'name' => 'name',
                'data_type' => 'String',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'name',
                'original_field_entity' => 'OptionGroup',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'title',
              'dataType' => 'String',
              'label' => E::ts('Option Group Title'),
              'spec' => [
                'name' => 'title',
                'data_type' => 'String',
                'suffixes' => NULL,
                'options' => FALSE,
                'fk_entity' => NULL,
                'original_field_name' => 'title',
                'original_field_entity' => 'OptionGroup',
              ],
            ],
            [
              'type' => 'field',
              'key' => 'option_value_fields:label',
              'dataType' => 'String',
              'label' => E::ts('Option Value Fields'),
              'spec' => [
                'name' => 'option_value_fields',
                'data_type' => 'String',
                'suffixes' => [
                  'id',
                  'label',
                ],
                'options' => TRUE,
                'fk_entity' => NULL,
                'original_field_name' => 'option_value_fields',
                'original_field_entity' => 'OptionGroup',
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
