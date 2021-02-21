<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {
	$frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
		'tt_content',
		'CType',
		[
			'LLL:EXT:ce_timeline/Resources/Private/Language/locallang.xlf:ce_title',
			'ce_timeline',
			'ce-timeline-icon'
		],
		'header',
		'after'
	);

	// New palette textfields
	$GLOBALS['TCA']['tt_content']['palettes']['textfields'] = array(
			'showitem' => 'header, header_layout, header_position, --linebreak--, bodytext','canNotCollapse' => 1
	);

	// New palette main
	$GLOBALS['TCA']['tt_content']['palettes']['main'] = array(
  			'showitem' => 'timeline_entries, --palette--;;textfields','canNotCollapse' => 1
	);

	$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['ce_timeline'] = 'ce-timeline-icon';
	$GLOBALS['TCA']['tt_content']['types']['ce_timeline'] = [
		'showitem' => '
                --palette--;;main,
				--palette--;;textfields,
				--palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
            	--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            	--div--;' . $frontendLanguageFilePrefix . 'tabs.access,
                hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
            	--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
        ',
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => true,
                ]
            ]
        ]
    ];

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
	    'timeline_entries' => [
	        'exclude' => 0,
			'label' => 'LLL:EXT:ce_timeline/Resources/Private/Language/locallang.xlf:entries',
			'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_cetimeline_domain_model_entry',
                'foreign_field' => 'pce',
                'appearance' => [
                    'collapseAll' => 1,
                    'expandSingle' => 1,
					'useSortable' => true,
					'levelLinksPosition' => 'bottom',
                ],
			],
	    ],
	]);

});
