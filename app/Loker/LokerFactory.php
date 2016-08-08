<?php
namespace App\Loker;

use App\Loker\LokerInterface;
use App\Loker\LokerCreator;

class LokerFactory extends Lokercreator{

    protected $loker;

    public function __construct()
    {
        # code...
    }

    public function factoryMethod(LokerInterface $product)
    {
        $this->loker = $product;

        return $this->loker->getProperties();
    }

    public function base()
    {
        return $this->loker->getBase();
    }

}