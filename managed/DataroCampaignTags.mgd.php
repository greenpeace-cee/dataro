<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'CustomGroup_Dataro_Campaign_Tag',
    'entity' => 'CustomGroup',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'dataro_campaign_tag',
        'title' => E::ts('Dataro Campaign Tag'),
        'extends' => 'Campaign',
        'table_name' => 'civicrm_value_dataro_campaign_tag',
        'style' => 'Inline',
        'help_pre' => E::ts('<p>Please refer to <a href="https://support.dataro.io/knowledge/campaign-tagging">Dataro&#39;s documentation</a> for details.</p>'),
        'help_post' => '',
        'collapse_adv_display' => TRUE,
        'is_public' => FALSE,
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category',
    'entity' => 'OptionGroup',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'dataro_campaign_category',
        'title' => E::ts('Dataro Campaign Category'),
        'data_type' => 'Int',
        'is_reserved' => FALSE,
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
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Acquisition',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Acquisition'),
        'value' => '1',
        'name' => 'Acquisition',
        'description' => E::ts('<p>Campaigns targeted toward contacts who have not given previously (e.g., List swap DM Acquisition)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Administration',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Administration'),
        'value' => '2',
        'name' => 'Administration',
        'description' => E::ts('Communications sent for purely administrative purposes, i.e. to inform donors that their annual receipts are being prepared'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Appeal',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Appeal'),
        'value' => '3',
        'name' => 'Appeal',
        'description' => E::ts('<p>Campaigns focused on an ask for a single or one-time gift (e.g.,Tax DM Appeal)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Community',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Community'),
        'value' => '4',
        'name' => 'Community',
        'description' => E::ts('<p>Events run by community members in support of your organization (e.g. Bake sales)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Convert_to_RG',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Convert to RG'),
        'value' => '5',
        'name' => 'Convert to RG',
        'description' => E::ts('<p>Campaigns that seek to convert donors from single giving to recurring giving</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Corporate',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Corporate'),
        'value' => '6',
        'name' => 'Corporate',
        'description' => E::ts('<p>A campaign to record gifts made on behalf of corporate entities</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Email_to_Target',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Email to Target'),
        'value' => '7',
        'name' => 'Email to Target',
        'description' => E::ts('<p>A communication where the intended outcome is that the donor emails a particular individual or organisation</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Emergency',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Emergency'),
        'value' => '8',
        'name' => 'Emergency',
        'description' => E::ts('<p>A special subcategory of Appeals, in which the Appeal is launched in response to a recent event relating to Emergency or Disaster relief (e.g. 2022 Ukraine Conflict)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Event',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Event'),
        'value' => '9',
        'name' => 'Event',
        'description' => E::ts('<p>A campaign to record donations made at events (e.g. Gala Dinner) or purchases of event tickets</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Gifts_in_Will',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Gifts in Will'),
        'value' => '10',
        'name' => 'Gifts in Will',
        'description' => E::ts('<p>A campaign to record gifts made in a will (e.g. Bequests)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Government_Funding',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Government Funding'),
        'value' => '11',
        'name' => 'Government Funding',
        'description' => E::ts('<p>A campaign to record grants and other types of government funding</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_In_Memory',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('In Memory'),
        'value' => '12',
        'name' => 'In Memory',
        'description' => E::ts('<p>A campaign to record gifts made in memory of an individual</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Membership',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Membership'),
        'value' => '13',
        'name' => 'Membership',
        'description' => E::ts('<p>A campaign to record membership payments</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Merchandise',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Merchandise'),
        'value' => '14',
        'name' => 'Merchandise',
        'description' => E::ts('<p>A campaign to record transactions for items bought via a store (eg. Online T-Shirt purchase)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Newsletter',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Newsletter'),
        'value' => '15',
        'name' => 'Newsletter',
        'description' => E::ts('<p>Periodic newsletter communications</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Peer_to_Peer',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Peer-to-Peer'),
        'value' => '16',
        'name' => 'Peer-to-Peer',
        'description' => E::ts('<p>Crowdfunding campaigns (e.g. Facebook Fundraising or Just Giving)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Petition',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Petition'),
        'value' => '17',
        'name' => 'Petition',
        'description' => E::ts('<p>A campaign to record sign-ups through a form or signature (e.g., Facebook Save the Climate leads)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Raffle',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Raffle'),
        'value' => '18',
        'name' => 'Raffle',
        'description' => E::ts('<p>A campaign to record donations made for the chance at a prize (e.g. &quot;New Year New Car&quot; Raffle)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Receipt',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Receipt'),
        'value' => '19',
        'name' => 'Receipt',
        'description' => E::ts('<p>A communication that is sent to a donor as a receipt of an earlier donation. Very occasionally donors will contribute as a response to a receipt.</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_RG_Acquisition',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('RG Acquisition'),
        'value' => '20',
        'name' => 'RG Acquisition',
        'description' => E::ts('<p>A campaign for the purpose of acquiring new donors specifically for Recurring Giving</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_RG_Declines',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('RG Declines'),
        'value' => '21',
        'name' => 'RG Declines',
        'description' => E::ts('<p>A campaign undertaken to resolve RG payment issues with donors</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_RG_Reactivation',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('RG Reactivation'),
        'value' => '22',
        'name' => 'RG Reactivation',
        'description' => E::ts('<p>A campaign to reactivate lapsed recurring givers</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_RG_Retention',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('RG Retention'),
        'value' => '23',
        'name' => 'RG Retention',
        'description' => E::ts('<p>A campaign to proactively prevent donors from canceling their recurring giving</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_RG_Upgrade',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('RG Upgrade'),
        'value' => '24',
        'name' => 'RG Upgrade',
        'description' => E::ts('<p>A campaign targeted at existing recurring givers to encourage them to increase their gift amount</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Services',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Services'),
        'value' => '25',
        'name' => 'Services',
        'description' => E::ts('<p>A campaign used to record communications and revenue for services performed by or on behalf of the organisation</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Stewardship',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Stewardship'),
        'value' => '26',
        'name' => 'Stewardship',
        'description' => E::ts('<p>Stewardship activities made to potential major donors</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Survey',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Survey'),
        'value' => '27',
        'name' => 'Survey',
        'description' => E::ts('<p>A campaign that has the purpose of collating donor attitudes to particular questions and issues</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Thank_You',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Thank You'),
        'value' => '28',
        'name' => 'Thank You',
        'description' => E::ts('<p>A thank you communication without an ask (e.g., Giving 12 months Thank You)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Trusts_Foundations',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Trusts & Foundations'),
        'value' => '29',
        'name' => 'Trusts & Foundations',
        'description' => E::ts('<p>A campaign to record gifts made on behalf of a trust or foundation</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Workplace_Giving',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Workplace Giving'),
        'value' => '30',
        'name' => 'Workplace Giving',
        'description' => E::ts('<p>A campaign to record regular contributions made as part of an employee&rsquo;s salary</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_One_off',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('One-off'),
        'value' => '31',
        'name' => 'One-off',
        'description' => E::ts('<p>Other single gift donations not classified above</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Category_OptionValue_Regular_Gift',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_category',
        'label' => E::ts('Regular Gift'),
        'value' => '32',
        'name' => 'Regular Gift',
        'description' => E::ts('<p>Other recurring gift donations (e.g., monthly or annual gifts made as a recurring contribution)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Dataro_Campaign_Tag_CustomField_Category',
    'entity' => 'CustomField',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'dataro_campaign_tag',
        'name' => 'Category',
        'label' => E::ts('Category'),
        'data_type' => 'Int',
        'html_type' => 'Select',
        'is_searchable' => TRUE,
        'column_name' => 'category',
        'option_group_id.name' => 'dataro_campaign_category',
      ],
      'match' => [
        'custom_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel',
    'entity' => 'OptionGroup',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'dataro_campaign_channel',
        'title' => E::ts('Dataro Campaign Channel'),
        'data_type' => 'Int',
        'is_reserved' => FALSE,
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
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_Door_to_Door',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('Door-to-Door'),
        'value' => '1',
        'name' => 'Door_to_Door',
        'description' => E::ts('<p>Communications made in person at the supporter&#39;s residence</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_DRTV',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('DRTV'),
        'value' => '2',
        'name' => 'DRTV',
        'description' => E::ts('<p>A campaign where the primary communication is via Direct TV Commercials or PSAs.</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_Email',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('Email'),
        'value' => '3',
        'name' => 'Email',
        'description' => E::ts('<p>Email (EDM) campaigns</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_Event',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('Event'),
        'value' => '4',
        'name' => 'Event',
        'description' => E::ts('<p>Campaigns made at an isolated event</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_Face_to_Face',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('Face-to-Face'),
        'value' => '5',
        'name' => 'Face-to-Face',
        'description' => E::ts('<p>Communications made on the street and in-person</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_Inserts',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('Inserts'),
        'value' => '6',
        'name' => 'Inserts',
        'description' => E::ts('<p>Unaddressed printed material such as magazine and newspaper inserts.</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_Mail',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('Mail'),
        'value' => '7',
        'name' => 'Mail',
        'description' => E::ts('<p>Direct Mail (DM) and undirected mail sent via the post</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_Online',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('Online'),
        'value' => '8',
        'name' => 'Online',
        'description' => E::ts('<p>Campaigns made online (via a website such as Everyday Hero, Just Giving, or Fundraise Up) or other digital channels (such as Facebook)</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_Other',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('Other'),
        'value' => '9',
        'name' => 'Other',
        'description' => E::ts('<p>Any other channel not detailed</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_Phone',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('Phone'),
        'value' => '10',
        'name' => 'Phone',
        'description' => E::ts('<p>Telemarketing campaigns made over the phone</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_Radio',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('Radio'),
        'value' => '11',
        'name' => 'Radio',
        'description' => E::ts('<p>Campaign hosted via radio</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_Dataro_Campaign_Channel_OptionValue_SMS',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'dataro_campaign_channel',
        'label' => E::ts('SMS'),
        'value' => '12',
        'name' => 'SMS',
        'description' => E::ts('<p>Campaigns sent via SMS/text message</p>'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Dataro_Campaign_Tag_CustomField_Channel',
    'entity' => 'CustomField',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'dataro_campaign_tag',
        'name' => 'Channel',
        'label' => E::ts('Channel'),
        'data_type' => 'Int',
        'html_type' => 'Select',
        'column_name' => 'channel',
        'option_group_id.name' => 'dataro_campaign_channel',
      ],
      'match' => [
        'custom_group_id',
        'name',
      ],
    ],
  ],
];
