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
         
        $supply = new Supply();
        $supply->setNumber($arr['number']);
        $supply->setQuantity($arr['quantity']);
        $supply->setAmount($arr['amount']);
        $supply->setDate(new \DateTime(date("Y-m-d h:i:sa", strtotime($arr['date']))));
        $supply->setProduct($this->psr->addByName($arr['name']));
     
        $this->srp->save($supply, true);

        $stock = new Stock();
        $stock->setProduct($supply->getProduct());
        $stock->setQuantity($supply->getQuantity());
        $stock->setCost($supply->getAmount() / $supply->getQuantity());

        $this->ssr->UpdateStock($stock);
    }
}
