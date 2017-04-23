<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    protected $fillable = [
        'title','slug','body','user_id'
    ];

    public function hasManyComments()
    {
        return $this->hasMany('App\Models\Comment','page_id','id');
    }
}
