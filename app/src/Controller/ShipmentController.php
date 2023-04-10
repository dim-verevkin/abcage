<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShipmentController extends AbstractController
{
    #[Route('/shipment', name: 'app_shipment')]
    public function index(): Response
    {
        return $this->render('shipment/index.html.twig', [
            'controller_name' => 'ShipmentController',
        ]);
    }
}
