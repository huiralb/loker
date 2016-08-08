<?php
namespace App\Loker;

use App\Loker\LokerInterface;
use App\Loker\LokerCreator;

class LokerFactory extends Lokercreator{

    protected $loker;

    public function factoryMethod(LokerInterface $product)
    {
        $this->loker = $product;

        return $this->loker->getProperties();
    }

}