<?php

namespace App\Http\Controllers\Web;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function show($id)
    {
        return view('web.pages.show',['page' => Page::find($id)]);
    }
}
