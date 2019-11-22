<?php
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
   \TYPO3\CMS\Core\Imaging\IconRegistry::class
);
$iconRegistry->registerIcon(
   'timeline-icon', // Icon-Identifier, z.B. tx-myext-action-preview
   \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
   ['source' => 'EXT:ce_timeline/Resources/Public/Icons/content-timeline.svg']
);
