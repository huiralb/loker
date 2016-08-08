<?php
namespace App\Loker\Targets;

use App\Loker\LokerInterface;

class LokerSemarang implements LokerInterface{

    public function getProperties()
    {
        return 'Loker semarang Property';
    }
}