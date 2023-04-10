<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Uid\Uuid;

use App\Repository\StockRepository;
use App\Service\NewOrderService;

class OrderController extends AbstractController
{
    #[Route('/order', name: 'app_order')]
    public function orderAction(Request $request, StockRepository $stockRepository): Response
    {     
        $stock = [];
        $stock = $stockRepository->findAll();
    
        return $this->render('neworder/index.html.twig', [
            'stock'=>$stock,
            'uuid'=>Uuid::v1(),
        ]);       
    }

    #[Route('/order/place', name: 'app_order_place')]
    public function orderActionPlace(Request $request, NewOrderService $orderService): Response
    {     
        if ($request->isXmlHttpRequest()) 
        {  
            $data = json_decode($request->getContent(), true);

            if (!isset($data))
            {
                return new JsonResponse(json_last_error());
            }
            else
            {
                $orderService->placeOrder($data['uuid']);

                $contents = "";
        
                return new JsonResponse($contents);
            }
        }
    }

    #[Route('/order/cancel', name: 'app_order_cancel')]
    public function orderActionCancel(Request $request, NewOrderService $orderService): Response
    {     
        if ($request->isXmlHttpRequest()) 
        {  
            $data = json_decode($request->getContent(), true);

            if (!isset($data))
            {
                return new JsonResponse(json_last_error());
            }
            else
            {
                $orderService->removeOrder($data['uuid']);

                $contents = "";
        
                return new JsonResponse($contents);
            }
        }
    }

    #[Route('/order/{id}', name: 'app_order_add')]
    public function orderAddAction(Request $request, NewOrderService $orderService, SerializerInterface $serializer, int $id): Response
    {
        if ($request->isXmlHttpRequest()) 
        {  
            $data = json_decode($request->getContent(), true);

            if (!isset($data))
            {
                return new JsonResponse(json_last_error());
            }
            else
            {
                $order = $orderService->updateOrder($data['quantity'], $data['uuid'], $id);

                $contents = $this->renderView('neworder/_index.html.twig', [
                    'order' => $order,
                ]);
        
                return new JsonResponse($contents);
            }
        } else 
        {  
            $stock = [];
            $stock = $stockRepository->findAll();
    
            return $this->render('order/index.html.twig', [
                'stock'=>$stock,
            ]);
        }       
    }
}
