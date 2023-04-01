<?php

namespace App\Service;

use App\Entity\Product;
use App\Repository\ProductRepository;

class ProductService
{
    private $rp = NULL;

    function __construct(ProductRepository $repository) 
    {
        $this->rp = $repository;
    }

    public function addByName(?string $name): ?string
    {
        $product = $this->rp->findOneBy(['name' => $name]);
        if ($product == NULL)
        {
            $product = new Product();
            $product->setName($name);
            $this->rp->save($product, true);
        }

        return $name;
    }
}
