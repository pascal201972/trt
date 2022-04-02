<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmploisController extends AbstractController
{
    #[Route('/emplois', name: 'app_emplois')]
    public function index(): Response
    {
        return $this->render('emplois/index.html.twig', [
            'page' => 'emplois',
        ]);
    }
}
