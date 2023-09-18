<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Pages\PagesService;


class BaseController extends Controller
{
    public $service;
    public function __construct(PagesService $service)
    {
        $this->service = $service;
    }
}
