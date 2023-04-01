<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Supply;
use App\Service\ProductService;
use App\Service\SupplyService;

class SupplyAddController extends AbstractController
{
    #[Route('/supply/add', name: 'app_supply_add')]
    public function supplyAddAction(Request $request, SupplyService $supplyService): Response
    {
        $supplyService->addNewSupply($request);
        return $this->redirectToRoute('app_supply');

        return $this->render('supply_add/index.html.twig', [
            'controller_name' => 'SupplyAddController',
        ]);
    }
}
