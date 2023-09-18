<?php

namespace App\Http\Controllers\Products;

<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Pages\PagesService;

=======
use App\Http\Controllers\Controller;
use App\Services\Products\ProductService;
use Illuminate\Http\Request;
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b

class BaseController extends Controller
{
    public $service;
<<<<<<< HEAD
    public function __construct(PagesService $service)
    {
=======
    public function __construct(ProductService $service){
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
        $this->service = $service;
    }
}
