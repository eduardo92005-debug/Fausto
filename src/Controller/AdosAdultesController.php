<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdosAdultesController extends AbstractController
{
    /**
     * @Route("/ados_adultes", name="app_ados_adultes")
     */
    public function index(): Response
    {
        return $this->render('ados_adultes/index.html.twig', [
            'controller_name' => 'AdosAdultesController',
        ]);
    }

    /**
     * @Route("/ados_adultes/presentation", name="app_ados_adultes_presentation")
     */
    public function presentation(): Response
    {
        return $this->render('ados_adultes/presentation.html.twig', [
            'controller_name' => 'AdosAdultesController',
        ]);
    }
}
