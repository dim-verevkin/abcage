<?php

namespace App\Service;

use App\Entity\Stock;
use App\Repository\StockRepository;

class StockService
{
    private $srp = NULL;

    function __construct(StockRepository $stockRep) 
    {
        $this->srp = $stockRep;
    }

    public function UpdateStock(Stock $stock)
    {
        $s = $this->srp->findOneBy(['product'=>$stock->getProduct(), 'cost'=>$stock->getCost()]);
        if($s != NULL)
        {
           $s->setCost($stock->getCost() + $s->getCost());
           $s->setQuantity($stock->getQuantity() + $s->getQuantity());
           $this->srp->save($s, true);
        }
        else
        {
            $this->srp->save($stock, true);
        }
    }
}