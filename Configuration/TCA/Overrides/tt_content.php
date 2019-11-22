<?php

/*
 * This file was created by Simon Köhler
 * at GOCHILLA s.a.
 * www.gochilla.com
 */

$tca = [
    'types' => [
        'ce_timeline' => [
            'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,pi_flexform,' .
                '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;' .
                'LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility'
        ]
    ]
];

$GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    ['Timeline', 'ce_timeline', 'ce_timeline']
);

/*
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:ce_timeline/Configuration/FlexForms/Timeline.xml',
    'ce_timeline'
);
*/
