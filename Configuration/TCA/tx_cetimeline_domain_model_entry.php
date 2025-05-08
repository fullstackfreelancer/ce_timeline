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
        'security' => [
            'ignorePageTypeRestriction' => true
        ],
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime'
        ],
        'iconfile' => 'EXT:ce_timeline/Resources/Public/Icons/content-timeline-record.svg',
    ],
    'types' => [
        '1' => ['showitem' => 'l10n_parent, l10n_diffsource, --palette--;;settings, --palette--;;titles, description, description_html, --div--;LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tab.gallery, --palette--;;dimensions,--palette--;;lightbox, --div--;LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tab.access, starttime, endtime'],
    ],
    'palettes' =>[
        'settings' =>[
            'showitem' => 'position,typeof, hidden',
        ],
        'titles' =>[
            'showitem' => 'header,header_layout',
        ],
        'dimensions' =>[
            'showitem' => 'media, --linebreak--,textimage_layout,image_width, image_height,images_per_row, gallery_width',
        ],
        'lightbox' =>[
            'showitem' => 'enable_lightbox,lightbox_width,lightbox_height',
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
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
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.starttime',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'size' => 13,
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.endtime',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'size' => 13,
                'default' => 0,
            ],
        ],
        'header' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.header',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'enable_lightbox' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:2'
                    ]
                ]
            ],
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.enable_lightbox',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'images_per_row' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:2'
                    ]
                ]
            ],
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.images_per_row',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['1', 1],
                    ['2', 2],
                    ['3', 3],
                    ['4', 4],
                    ['5', 5],
                    ['6', 6],
                    ['7', 7],
                    ['8', 8]
                ],
                'default' => '1'
            ],
        ],
        'gallery_width' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:2'
                    ]
                ]
            ],
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.gallery_width',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['33%', 33],
                    ['50%', 50]
                ],
                'default' => '50'
            ],
        ],
        'image_width' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:2'
                    ]
                ]
            ],
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.image_width',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim'
            ],
        ],
        'image_height' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:2'
                    ]
                ]
            ],
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.image_height',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim'
            ],
        ],
        'lightbox_width' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:2'
                    ]
                ]
            ],
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.lightbox_width',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim'
            ],
        ],
        'lightbox_height' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:2'
                    ]
                ]
            ],
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.lightbox_height',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim'
            ],
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
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.typeof.textimage', 2],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.typeof.html', 3],
                ],
            ]
        ],
        'header_layout' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:0',
                        'FIELD:typeof:=:2'
                    ]
                ]
            ],
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
        'textimage_layout' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:2'
                    ]
                ]
            ],
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.textimage_layout',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.textimage_layout.top', 0],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.textimage_layout.bottom', 1],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.textimage_layout.left', 2],
                    ['LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.textimage_layout.right', 3]
                ],
            ]
        ],
        'description' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:0',
                        'FIELD:typeof:=:2'
                    ]
                ]
            ],
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 8,
                'enableRichtext' => true,
                'default' => ''
            ],
        ],
        'description_html' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:3'
                    ]
                ]
            ],
            'exclude' => true,
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.description_html',
            'config' => [
                'type' => 'text',
                'renderType' => 'codeEditor',
                'format' => 'html',
                'rows' => 20,
                'default' => ''
            ],
        ],
        'position' => [
            'displayCond' => [
                'AND' => [
                    'OR' => [
                        'FIELD:typeof:=:0',
                        'FIELD:typeof:=:2',
                        'FIELD:typeof:=:3'
                    ]
                ]
            ],
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
        'media' => [
            'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang_db.xlf:tx_cetimeline_domain_model_entry.media',
            'config' => [
                'type' => 'file',
                'maxitems' => 50,
                'allowed' => 'common-image-types'
            ],
        ],
    ],
];
