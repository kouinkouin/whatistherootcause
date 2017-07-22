<?php

namespace AppBundle\Service\Reason;

use AppBundle\Entity\Cause;
use Doctrine\ORM\EntityManagerInterface;

class ReasonGenerator
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getRandomReason(): string
    {
        $causeRepository = $this->em->getRepository(Cause::class);
        if ($cause = $causeRepository->findOneRandomly()) {
            return $cause->getSentence();
        }
        return 'There is not cause';
    }
}
