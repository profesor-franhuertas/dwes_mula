<?php
// src/Controller/Controlador.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controlador extends AbstractController
{

    public function numero(): Response
    {
        $n = random_int(0, 100);

        return $this->render('numero.html.twig', [
            'numero' => $n,
        ]);
    }

    /**
     * @Route("/ayuda")
     */
    public function ayuda()
    {
        return new Response('Página de ayuda');
    }
}
