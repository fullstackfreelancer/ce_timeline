<?php
namespace SIMONKOEHLER\CeTimeline\Userfuncs;

use TYPO3\CMS\Backend\Form\Element\UserElement;
use TYPO3\CMS\Backend\Utility\BackendUtility;

class Tca{

    /**
     * Renders a custom, user-defined field.
     *
     * @param array $configuration
     * @param UserElement $parentObject
     * @return string HTML for the field
     */
    public function specialField($configuration, $parentObject)
    {
        $color = (isset($configuration['parameters']['color'])) ? $configuration['parameters']['color'] : 'red';
        $size = (isset($configuration['parameters']['size'])) ? (int)$configuration['parameters']['size'] : 20;
        $formField = '<div style="padding: 5px; background-color: ' . $color . ';">';
        $formField .= '<input type="text" name="' . $configuration['itemFormElName'] . '"';
        $formField .= ' value="' . htmlspecialchars($configuration['itemFormElValue']) . '"';
        $formField .= ' size="' . $size . '"';
        $formField .= ' onchange="' . htmlspecialchars(implode('', $configuration['fieldChangeFunc'])) . '"';
        $formField .= $configuration['onFocus'];
        $formField .= ' /></div>';
        return $formField;
    }

    public function haikuTitle(&$parameters){
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
