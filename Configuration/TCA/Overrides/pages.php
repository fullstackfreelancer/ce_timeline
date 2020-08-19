<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'ce_timeline',
    'Configuration/TypoScript/TsConfig/page.typoscript',
    'Timeline Content Element'
);

//$GLOBALS['TCA']['tx_cetimeline_domain_model_entry']['columns']['content_elements']['config']['overrideChildTca']['columns']['colPos']['config']['default'] = '1978';
