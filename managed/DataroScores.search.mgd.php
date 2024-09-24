<?php

use CRM_Dataro_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Dataro_Scores',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Scores',
        'label' => E::ts('Dataro Scores'),
        'api_entity' => 'Contact',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'Contact_DataroScore_contact_id_01.model_score',
            'Contact_DataroScore_contact_id_01.model_name_id:label',
            'Contact_DataroScore_contact_id_01.model_rank',
            'Contact_DataroScore_contact_id_01.modified_date',
          ],
          'orderBy' => [],
          'where' => [],
          'groupBy' => [],
          'join' => [
            [
              'DataroScore AS Contact_DataroScore_contact_id_01',
              'INNER',
              [
                'id',
                '=',
                'Contact_DataroScore_contact_id_01.contact_id',
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
    'name' => 'SavedSearch_Dataro_Scores_SearchDisplay_Dataro_Scores_Table',
    'entity' => 'SearchDisplay',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Dataro_Scores_Table',
        'label' => E::ts('Dataro Scores Table'),
        'saved_search_id.name' => 'Dataro_Scores',
        'type' => 'table',
        'settings' => [
          'description' => NULL,
          'sort' => [
            [
              'Contact_DataroScore_contact_id_01.model_name_id:label',
              'ASC',
            ],
          ],
          'limit' => 0,
          'pager' => FALSE,
          'placeholder' => 10,
          'columns' => [
            [
              'type' => 'field',
              'key' => 'Contact_DataroScore_contact_id_01.model_name_id:label',
              'dataType' => 'Integer',
              'label' => E::ts('Model Name'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'Contact_DataroScore_contact_id_01.model_score',
              'dataType' => 'Money',
              'label' => E::ts('Score'),
              'sortable' => TRUE,
              'alignment' => 'text-right',
              'rewrite' => "{if \"[Contact_DataroScore_contact_id_01.model_score]\" == \"\"}Unknown{else}{\"[Contact_DataroScore_contact_id_01.model_score]\"|replace:'€':''}{/if}",
              'icons' => [],
              'cssRules' => [
                [
                  'font-italic',
                  'Contact_DataroScore_contact_id_01.model_score',
                  'IS EMPTY',
                ],
              ],
            ],
            [
              'type' => 'field',
              'key' => 'Contact_DataroScore_contact_id_01.model_rank',
              'dataType' => 'Integer',
              'label' => E::ts('Rank'),
              'sortable' => TRUE,
              'alignment' => 'text-right',
              'rewrite' => '{if "[Contact_DataroScore_contact_id_01.model_rank]" == ""}Unknown{else}[Contact_DataroScore_contact_id_01.model_rank]{/if}',
              'cssRules' => [
                [
                  'font-italic',
                  'Contact_DataroScore_contact_id_01.model_rank',
                  'IS EMPTY',
                ],
              ],
            ],
            [
              'type' => 'field',
              'key' => 'Contact_DataroScore_contact_id_01.modified_date',
              'dataType' => 'Timestamp',
              'label' => E::ts('Last Updated'),
              'sortable' => TRUE,
            ],
          ],
          'actions' => FALSE,
          'classes' => [
            'table',
            'table-striped',
            'crm-sticky-header',
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
