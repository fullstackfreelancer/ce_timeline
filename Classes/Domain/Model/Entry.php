<?php
namespace SIMONKOEHLER\Osp\Domain\Model;
use TYPO3\CMS\Extbase\Annotation\ORM\Cascade;

class Entry extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * typeof
     *
     * @var int
     */
    protected $typeof = 0;

    /**
     * media
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @Cascade remove
     */
    protected $media = null;


    /**
     * Returns the media
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Returns the typeof
     *
     * @return int $typeof
     */
    public function getTypeof()
    {
        return $this->typeof;
    }

    /**
     * Sets the typeof
     *
     * @param int $typeof
     * @return void
     */
    public function setTypeof($typeof)
    {
        $this->typeof = $typeof;
    }
}
