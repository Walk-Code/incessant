<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'Comments';
    protected $fillable = [
        'nickname','email','website','content','page_id','article_id'
    ];
}
