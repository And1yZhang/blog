<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleView extends Model
{
    protected $guarded = [];

    protected $casts = [
        'extra' => 'array'
    ];
}
