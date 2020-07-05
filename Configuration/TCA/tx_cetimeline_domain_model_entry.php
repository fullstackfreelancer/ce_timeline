<?php
return [
    'ctrl' => [
        'title' => 'Timeline Record',
        'label' => 'header',
        'label_alt' => 'typeof,position',
        'label_alt_force' => 1,
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'header,description',
        'iconfile' => 'EXT:ce_timeline/Resources/Public/Icons/content-timeline.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, header, header_layout, description, position, typeof',
    ],
    'types' => [
        '1' => ['showitem' => 'l10n_parent, l10n_diffsource, --palette--;;settings, --palette--;;titles, description'],
    ],
    'palettes' =>[
        'settings' =>[
            'showitem' => 'position,typeof, hidden',
        ],
        'titles' =>[
            'showitem' => 'header,header_layout',
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_cetimeline_domain_model_entry',
                'foreign_table_where' => 'AND tx_cetimeline_domain_model_entry.pid=###CURRENT_PID### AND tx_cetimeline_domain_model_entry.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'header' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.header',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'header_layout' => [
            'displayCond' => 'FIELD:typeof:=:0',
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.header_layout',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.header_layout.default', 0],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.header_layout.h1', 1],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.header_layout.h2', 2],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.header_layout.h3', 3],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.header_layout.h4', 4],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.header_layout.h5', 5],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.header_layout.h6', 6]
                ],
            ]
        ],
        'description' => [
            'displayCond' => 'FIELD:typeof:=:0',
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 8,
            ],
            'defaultExtras' => 'richtext[]',
        ],
        'position' => [
            'displayCond' => 'FIELD:typeof:=:0',
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.position',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.position.left', 0],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.position.right', 1],
                ],
            ]
        ],
        'typeof' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.typeof',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.typeof.textblock', 0],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.typeof.timeentry', 1],
                ],
            ]
        ]
    ],
];
