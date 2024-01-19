<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Post\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::query()->latest()->paginate(10);

        return view("welcome" , compact("posts"));
    }
}
