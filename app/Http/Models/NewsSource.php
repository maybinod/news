<?php

namespace App\Http\models;

use Illuminate\Database\Eloquent\Model;

class NewsSource extends Model
{
    protected $table = 'news_source';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'news_id',
    ];
}
