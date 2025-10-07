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
    'name' => 'OptionGroup_dataro_model_name_OptionValue_dm_appeal',
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
        'description' => E::ts('<p>Donate more than 10 to One-Off mail in the next 3 months with a category in (Appeal, Newsletter, Acquisition, Emergency).</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_dataro_model_name_OptionValue_dm_24m_lapsed',
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
        'description' => E::ts('<p>Make a One-Off donation in the next 3 months</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_dataro_model_name_OptionValue_dm_appeal_500',
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
        'description' => E::ts('<p>Donate more than 500 to One-Off mail in the next 3 months with a category in (Appeal, Newsletter, Acquisition, Emergency).</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_dataro_model_name_OptionValue_gift_in_will',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_model_name',
        'label' => E::ts('Gift in Will'),
        'value' => '4',
        'name' => 'gift_in_will',
        'description' => E::ts('<p>Confirms a bequest (legacy gift) in the next 12 months.</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_dataro_model_name_OptionValue_major_giving',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_model_name',
        'label' => E::ts('Major Giving'),
        'value' => '5',
        'name' => 'major_giving',
        'description' => E::ts('<p>Donates more than major giving threshold in the next 12 months by One-Off donations. Values can be: [5000,10000]</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_dataro_model_name_OptionValue_mid_level',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_model_name',
        'label' => E::ts('Mid-Level'),
        'value' => '6',
        'name' => 'mid_level',
        'description' => E::ts('<p>Donates more than midlevel threshold and less than major giving threshold in the next 12 months by One-Off donations. Values can be: [min:{500,1000},max:{5000,10000}]. Can include or exclude RG.</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_dataro_model_name_OptionValue_rg_upgrade',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_model_name',
        'label' => E::ts('RG Upgrade'),
        'value' => '7',
        'name' => 'rg_upgrade',
        'description' => E::ts('<p>Donates a maximum value in the next 90 days at least 5 higher than the last 90 days.</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_dataro_model_name_OptionValue_rg_churn',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_model_name',
        'label' => E::ts('RG Churn'),
        'value' => '8',
        'name' => 'rg_churn',
        'description' => E::ts('<p>Does not make a recurring contribution in the next 6 months.</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_dataro_model_name_OptionValue_rg_reactivation',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_model_name',
        'label' => E::ts('RG Reactivation'),
        'value' => '9',
        'name' => 'rg_reactivation',
        'description' => E::ts('<p>Donates a recurring gift in the next 6 months.</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
];
