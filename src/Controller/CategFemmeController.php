<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategFemmeController extends AbstractController
{
    #[Route('/categ_femme', name: 'app_categ_femme')]
    public function index(): Response
    {
        return $this->render('categ_femme/index.html.twig', [
            'controller_name' => 'CategFemmeController',
        ]);
    }
}