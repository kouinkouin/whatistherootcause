<?php

namespace AppBundle\Controller;

use AppBundle\Service\Reason\ReasonGenerator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     * @param ReasonGenerator $reasonGenerator
     *
     * @return Response
     */
    public function indexAction(ReasonGenerator $reasonGenerator)
    {
        return $this->render(
            'default/index.html.twig',
            [
                'reason' => $reasonGenerator->getRandomReason(),
            ]
        );
    }
}
