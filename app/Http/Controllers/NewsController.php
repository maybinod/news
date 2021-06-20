<?php

namespace App\Http\Controllers;

use App\Http\Services\NewsService;
use Illuminate\Routing\Controller as BaseController;

class NewsController extends BaseController
{
    protected $service;
    /**
     * NewsService constructor.
     */
    public function __construct(NewsService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return $this->getService()->allNews();
    }

    protected function getService()
    {
        return $this->service;
    }
}
