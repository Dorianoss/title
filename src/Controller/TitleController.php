<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TitleController extends AbstractController
{
    /**
     * @Route("/api/title", name="title")
     */
    public function titleAction()
    {
        return new JsonResponse(['title' => uniqid()]);

    }

    /**
     * @Route("/", name="foo")
     */
    public function foo()
    {
        return new Response('<body></body>');
    }
}