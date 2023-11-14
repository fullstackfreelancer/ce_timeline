<?php
defined('TYPO3') || die('Access denied.');

call_user_func(
    function() {

        // Hide table in all list views, in order to provide smooth inline editing experience
        $TCA['tx_cetimeline_domain_model_entry']['ctrl']['hideTable'] = 1;

    }
);
