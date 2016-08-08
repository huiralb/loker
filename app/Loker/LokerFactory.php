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

    public function make(LokerInterface $product)
    {
        $this->loker = $product;

        return $this->loker->getBase();
    }

    public function base()
    {
        return $this->loker->getBase();
    }

}