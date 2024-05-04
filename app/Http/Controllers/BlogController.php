<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class BlogController extends Controller
{
    public function blog() {

        return view('blog', [
            'posts' => Post::all()
        ]);

    }
    public function blog_details() {
        return view('blog-details');
    }
}
