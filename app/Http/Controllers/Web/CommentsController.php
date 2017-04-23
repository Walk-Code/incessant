<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Input;

class CommentsController extends Controller
{
    public function store()
    {
        if (Comment::create(Input::all())){
            return redirect()->back();
        }else{
            return redirect()->back()->withErrors("评论失败");
        }

    }
}
