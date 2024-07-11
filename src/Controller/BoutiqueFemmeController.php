<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoutiqueFemmeController extends AbstractController
{
    #[Route('/femme', name: 'app_femme')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $products = $this->getProducts($entityManager);

        return $this->render('femme/index.html.twig', [
            'controller_name' => 'BoutiqueFemmeController',
            'products' => $products,
        ]);
    }

    private function getProducts(EntityManagerInterface $entityManager): array
    {
        return $entityManager->getRepository(Product::class)->findAll();
    }
}

