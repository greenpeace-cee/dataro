<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'OptionGroup_dataro_model_name',
    'entity' => 'OptionGroup',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'dataro_model_name',
        'title' => E::ts('Dataro Model Name'),
        'description' => E::ts('Dataro Model Name'),
        'data_type' => 'Integer',
        'is_reserved' => FALSE,
        'is_active' => TRUE,
        'option_value_fields' => [
          'name',
          'label',
          'description',
        ],
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_dataro_model_name_OptionValue_DM_Appeal',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_model_name',
        'label' => E::ts('DM Appeal'),
        'value' => '1',
        'name' => 'dm_appeal',
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_dataro_model_name_OptionValue_DM_24M_Lapsed',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_model_name',
        'label' => E::ts('DM 24M Lapsed'),
        'value' => '2',
        'name' => 'dm_24m_lapsed',
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_dataro_model_name_OptionValue_DM_Appeal_500',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_model_name',
        'label' => E::ts('DM Appeal 500'),
        'value' => '3',
        'name' => 'dm_appeal_500',
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
];
