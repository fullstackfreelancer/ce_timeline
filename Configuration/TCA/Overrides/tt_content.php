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

// plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
$pluginSignature = 'cetimeline_timeline';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    // Flexform configuration schema file
    'FILE:EXT:ce_timeline/Configuration/FlexForms/Timeline.xml'
);
