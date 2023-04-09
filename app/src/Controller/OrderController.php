<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;

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
        ]);       
    }

    #[Route('/order/{id}', name: 'app_order_add')]
    public function orderAddAction(Request $request, NewOrderService $orderService, SerializerInterface $serializer, int $id): Response
    {
        if ($request->isXmlHttpRequest()) 
        {  
            $data = json_decode($request->getContent(), true);

            if (!isset($data['name']))
            {
                return new JsonResponse(json_last_error());
            }
            else
            {
                $type = $data['name']; 
                $rsp = NULL;
                switch($type)
                {
                    case "act_add":
                        $order = $orderService->updateOrder($data['quantity'], $id);
                        $rsp = $serializer->serialize($order,'json');
                        break;
                }

                return new JsonResponse($rsp); 
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
