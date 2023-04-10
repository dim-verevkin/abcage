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

    public function updateOrder(?int $need, ?string $uuid, ?int $id)
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
                $order->setOrderuuid($uuid);
                $order->setStatus(false);
                
                $this->orp->save($order, true);     

                return $this->orp->findBy(['orderuuid' => $uuid]);
            } 
            else
                return NULL;   
        }
    }

    public function removeOrder(?string $uuid)
    {
        $order = $this->orp->findOneBy(['orderuuid' => $uuid]);
        if ($order != NULL)
        {
            do {
                $this->orp->remove($order, true);     
                $order = $this->orp->findOneBy(['orderuuid' => $uuid]);
              } while ($order != NULL);
        }
    }

    public function placeOrder(?string $uuid)
    {
        $order = $this->orp->findOneBy(['orderuuid' => $uuid, 'status' => false,]);
        $stock = NULL;
        if ($order != NULL)
        {
            do {
                $stock = $this->srp->findOneBy(['product' => $order->getProduct(), 'cost' => $order->getCost(),]);
                $stock->setQuantity($stock->getQuantity() - $order->getQuantity());
                $this->srp->save($stock, true);     

                $order->setStatus(true);
                $this->orp->save($order, true);     
                $order = $this->orp->findOneBy(['orderuuid' => $uuid, 'status' => false,]);
                
              } while ($order != NULL);
        }
    }
}
