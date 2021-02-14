<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MiControladorController extends AbstractController
{
    /**
     * @Route("/mi/controlador", name="mi_controlador")
     */
    public function index(): Response
    {
        return $this->render('mi_controlador/index.html.twig', [
            'controller_name' => 'MiControladorController',
        ]);
    }
}
