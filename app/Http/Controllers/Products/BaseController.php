<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Services\Products\ProductService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function __construct(ProductService $service){
        $this->service = $service;
    }
}
