<?php
namespace App\Loker\Targets;

use App\Loker\LokerInterface;

class lokerId implements LokerInterface{

    private $base = 'loker.id';

    public function getProperties()
    {
        return 'Loker.id Property';
    }

    public function getBase()
    {
        return $this->base;
    }
}