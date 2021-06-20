<?php

namespace App\Http\Services;

use App\Http\Repositories\NewsRepository;

class NewsService
{
    protected $repository;
    /**
     * NewsService constructor.
     */
    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function allNews()
    {
        return $this->getRepository()->allNews();
    }

    public function getRepository()
    {
        return $this->repository;
    }
}
