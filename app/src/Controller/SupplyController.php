<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\SupplyRepository;

class SupplyController extends AbstractController
{
    #[Route('/supply', name: 'app_supply')]
    public function supplyAction(SupplyRepository $supplyRepository): Response
    {
        $supply = [];
        $supply = $supplyRepository->findAll();

        return $this->render('supply/index.html.twig', [
            'supply'=>$supply,
        ]);
    }
}
