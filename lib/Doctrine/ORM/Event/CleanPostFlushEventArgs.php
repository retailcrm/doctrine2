<?php

namespace Doctrine\ORM\Event;

use Doctrine\Common\EventArgs;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Event triggers in the end of flush after all actions and clears in uow
 * Flush can be called inside listeners of this event
 */
class CleanPostFlushEventArgs extends EventArgs
{
    const cleanPostFlush = 'cleanPostFlush';

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager()
    {
        return $this->em;
    }
}
