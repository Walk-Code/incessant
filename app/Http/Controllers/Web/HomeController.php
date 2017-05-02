<?php

namespace App\Http\Controllers\Web;

use App\Models\Page;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home',['pages' => Page::paginate(15)]);
    }
}
