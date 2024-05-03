<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class BlogController extends Controller
{
    public function index() {

        return view('blog', [
            'posts' => Post::all()
        ]);

    }
}
