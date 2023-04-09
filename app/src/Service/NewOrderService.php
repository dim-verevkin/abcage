<?php

namespace App\Service;

use App\Entity\Stock;
use App\Entity\NewOrder;
use App\Repository\StockRepository;
use App\Repository\NewOrderRepository;

class NewOrderService
{
    private $orp = NULL;
    private $srp = NULL;

    function __construct(NewOrderRepository $orderRep, StockRepository $stockRep) 
    {
        $this->orp = $orderRep;
        $this->srp = $stockRep;
    }

    public function updateOrder(?int $need, ?int $id)
    {

        $stock = $this->srp->findOneBy(['id' => $id]);
        if ($stock != NULL)
        {
            if ($stock->getQuantity() > $need)
            {
                $order = new NewOrder();
                $order->setProduct($stock->getProduct());
                $order->setQuantity($need);
                $order->setCost($stock->getCost());
                $order->setAmount($stock->getCost() * $need);
                
                $this->orp->save($order, true);     

                return $order;
            } 
            else
                return NULL;
            
        }
           // $product = new Product();
           // $product->setName($name);
           // $this->rp->save($product, true);
    }
}
