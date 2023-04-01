<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\StockRepository;

class StockController extends AbstractController
{
    #[Route('/stock', name: 'app_stock')]
    public function stockAction(StockRepository $stockRepository): Response
    {
        $stock = [];
        $stock = $stockRepository->findAll();

        return $this->render('stock/index.html.twig', [
            'stock'=>$stock,
        ]);
    }
}
