<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = [
        'title','slug','body','image','user_id'
    ];

    public function hasManyComments()
    {
        return $this->hasMany('App\Modesl\Comment','article_id','id');
    }
    
}
