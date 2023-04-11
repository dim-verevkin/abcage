<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Service\NewOrderService;

class ShipmentController extends AbstractController
{
    #[Route('/shipment', name: 'app_shipment')]
    public function shipmentAction(Request $request, NewOrderService $orderService): Response
    {
        if (!$request->isXmlHttpRequest()) 
        { 
            $shipid = $orderService->getShipmentsID();

            return $this->render('shipment/index.html.twig', [
                'shipments' => $shipid,
            ]);
        }else
        {
            $data = json_decode($request->getContent(), true);

            $order = $orderService->getShipments($data['uuid']);

            $contents = $this->renderView('shipment/_index.html.twig', [
                'order' => $order,
            ]);
    
            return new JsonResponse($contents);
        }
    }
}
