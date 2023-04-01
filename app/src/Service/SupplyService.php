<?php

namespace App\Service;

use App\Entity\Supply;
use App\Entity\Stock;
use App\Service\StockService;
use App\Service\ProductService;
use App\Repository\SupplyRepository;
use Symfony\Component\HttpFoundation\Request;

class SupplyService
{
    private $psr = NULL;
    private $ssr = NULL;
    private $srp = NULL;

    function __construct(SupplyRepository $supplRep, ProductService $prodServ, StockService $stockServ) 
    {
        $this->srp = $supplRep;
        $this->psr = $prodServ;
        $this->ssr = $stockServ;
    }

    public function addNewSupply(Request $request)
    {
        $data = $request->getContent();
        $arr = [];
        parse_str($data, $arr);
         
        $s = new Supply();
        $s->setNumber($arr['number']);
        $s->setQuantity($arr['quantity']);
        $s->setAmount($arr['amount']);
        $s->setDate(new \DateTime(date("Y-m-d h:i:sa", strtotime($arr['date']))));
        $s->setProduct($this->psr->addByName($arr['name']));
     
        $this->srp->save($s, true);

        $g = new Stock();
        $g->setProduct($s->getProduct());
        $g->setQuantity($s->getQuantity());
        $g->setCost($s->getAmount() / $s->getQuantity());

        $this->ssr->UpdateStock($g);
    }
}
