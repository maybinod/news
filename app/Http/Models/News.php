<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'author',
        'content',
        'description',
        'image_url',
        'published_at',
        'title',
        'url',
    ];

    public function source()
    {
        return $this->hasOne(NewsSource::class, 'news_id', 'id');
    }
}
