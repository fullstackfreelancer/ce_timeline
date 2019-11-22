<?php
// Enable TYPO3 to create records on standard pages instead of only sys folders
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cetimeline_domain_model_entry');

// Hide table in all list views, in order to provide smooth inline editing experience
$TCA['tx_cetimeline_domain_model_entry']['ctrl']['hideTable'] = 1;
