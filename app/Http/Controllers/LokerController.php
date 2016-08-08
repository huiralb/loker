<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Loker\LokerFactory;
use App\Loker\Targets\LokerSemarang;
use App\Loker\Targets\LokerId;

class LokerController extends Controller
{
    protected $factory;

    public function __construct()
    {
        $this->factory = new LokerFactory;
    }
    public function index()
    {
        $target = new LokerId;
        
        $this->factory->make($target);
        return $this->factory->base();
    }
}
