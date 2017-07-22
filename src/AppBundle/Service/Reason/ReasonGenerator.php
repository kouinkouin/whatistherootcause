<?php

namespace AppBundle\Service\Reason;

class ReasonGenerator
{
    private $reasons = [
        'A beer falls on the server',
        'Bees in the server room',
        'Candies were missed',
    ];

    public function getRandomReason(): string
    {
        $a = array_rand($this->reasons, 1);

        return $this->reasons[$a];
    }
}
