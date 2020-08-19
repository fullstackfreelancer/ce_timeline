<?php
namespace SIMONKOEHLER\CeTimeline\Controller;
use SIMONKOEHLER\CeTimeline\Domain\Repository\EntryRepository;
use TYPO3\CMS\Extbase\Annotation\Inject;

/**
 * EntryController
 */
class EntryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * Protected Variable EntryRepository
     *
     * @var EntryRepository
     * @Inject
     */
    protected $entryRepository;

    /**
     * action list
     *
     * @return void
     */
    public function listAction(){

        $extensionConfiguration = $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['ce_timeline'];
        if($extensionConfiguration['timelinePluginEnabled']){

            $currentUid = $this->configurationManager->getContentObject()->data['uid'];
            $this->view->assign('entries',$this->entryRepository->findAll());
            $this->view->assign('settings',$this->settings);

        }

    }

}
