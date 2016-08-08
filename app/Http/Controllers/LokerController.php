<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Loker\LokerFactory;
use App\Loker\Targets\LokerSemarang;

class LokerController extends Controller
{
    protected $factory;

    public function __construct()
    {
        $this->factory = new LokerFactory;
    }
    public function index()
    {
        $lokerSemarang = new LokerSemarang;
        
        return $this->factory->make($lokerSemarang);
    }
}
