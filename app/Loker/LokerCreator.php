<?php
namespace App\Loker;

use App\Loker\LokerInterface;

abstract class LokerCreator{

    protected abstract function factoryMethod(LokerInterface $product);

    public function make($product)
    {
        return $this->factoryMethod($product);
    }

}