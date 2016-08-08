<?php
namespace App\Loker;

use App\Loker\LokerInterface;

abstract class LokerCreator{

    protected abstract function make(LokerInterface $product);

    public function create($product)
    {
        return $this->make($product);
    }

}