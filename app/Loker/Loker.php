<?php
namespace App\Loker;

use App\Loker\LokerFactory;

class Loker{
    protected $targetCases = [];

    protected $factory;

    public function __construct()
    {
        $this->factory = new LokerFactory;
    }

    public function add($targetId)
    {
        $this->targetCases[] = $this->factory->make($targetId);
    }

    public function getTargets()
    {
        return $this->targetCases;
    }
}