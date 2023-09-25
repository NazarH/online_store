<?php

namespace App\Http\Controllers;

use App\Services\Admin\Service;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected Service $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
