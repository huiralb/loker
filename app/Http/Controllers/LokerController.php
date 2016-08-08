<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Loker\Loker;
use App\Loker\Targets\LokerSemarang;
use App\Loker\Targets\LokerId;

class LokerController extends Controller
{
    protected $loker;

    public function __construct()
    {
        $this->loker = new Loker;
    }
    public function index()
    {
        $target = new LokerId;
        
        $this->loker->add($target);
        return $this->loker->getTargets();
    }
}
