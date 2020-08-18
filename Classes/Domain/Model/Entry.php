<?php
namespace SIMONKOEHLER\Osp\Domain\Model;

class Entry extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * typeof
     *
     * @var int
     */
    protected $typeof = 0;

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
