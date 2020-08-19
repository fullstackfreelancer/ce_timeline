<?php
$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = [
    'desktop' => [
        'title' => 'LLL:EXT:wil_master/Resources/Private/Language/locallang_db.xlf:imageManipulation.desktop',
        'allowedAspectRatios' => [
            'NaN' => [
                'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                'value' => 0.0
            ],
            '16:9' => [
                'title' => '16 : 9',
                'value' => 16/9
            ],
        ]
    ],
    'tablet' => [
        'title' => 'LLL:EXT:wil_master/Resources/Private/Language/locallang_db.xlf:imageManipulation.tablet',
        'allowedAspectRatios' => [
            'NaN' => [
                'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                'value' => 0.0
            ],
            '16:9' => [
                'title' => '16 : 9',
                'value' => 16/9
            ],
        ]
    ],
    'phablet' => [
        'title' => 'LLL:EXT:wil_master/Resources/Private/Language/locallang_db.xlf:imageManipulation.phablet',
        'allowedAspectRatios' => [
            'NaN' => [
                'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                'value' => 0.0
            ],
            '16:9' => [
                'title' => '16 : 9',
                'value' => 16/9
            ],
        ]
    ],
    'mobile' => [
        'title' => 'LLL:EXT:wil_master/Resources/Private/Language/locallang_db.xlf:imageManipulation.mobile',
        'allowedAspectRatios' => [
            'NaN' => [
                'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                'value' => 0.0
            ],
            '16:9' => [
                'title' => '16 : 9',
                'value' => 16/9
            ],
        ]
    ]
];
