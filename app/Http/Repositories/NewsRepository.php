<?php

namespace App\Http\Repositories;

use App\Http\Models\News;

class NewsRepository
{
    public function allNews()
    {
     return $this->getModelClass()->with('source')->get();
    }

    public function getModelClass()
    {
        return new News();
    }
}
