<?php
namespace SIMONKOEHLER\CeTimeline\Userfuncs;

use TYPO3\CMS\Backend\Form\Element\UserElement;
use TYPO3\CMS\Backend\Utility\BackendUtility;

class Tca{

    public function recordTitle(&$parameters){
        $record = BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
        $newTitle = $record['title'];
        switch ($record['typeof']) {
            case '0':
                $newTitle .= 'Type '.$record['typeof'].': '.substr(strip_tags($record['header']), 0, 80).' '.$record['description'];
                break;

            case '1':
                $newTitle .= 'Type '.$record['typeof'].': '.substr(strip_tags($record['header']), 0, 80);
                break;

            case '2':
                $newTitle .= 'Type '.$record['typeof'].': '.substr(strip_tags($record['header']), 0, 80).' '.$record['description'];
                break;

            case '3':
                $newTitle .= 'Type '.$record['typeof'].': '.substr(strip_tags($record['header']), 0, 80).' ' .$record['description'];
                break;
        }
        $parameters['title'] = $newTitle;
    }

}
