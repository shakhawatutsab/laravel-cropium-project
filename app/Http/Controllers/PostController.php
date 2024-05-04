<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function insert()
    {
        $insert_data = DB::table('posts')->insert([
            'firstname' => 'Shakhawat Hossain',
            'lastname' => 'Utsab',
            'email_address' => 'shakhawatutsab@gmail.com',
            'content' => 'Lorem ipsum dolor sit amet etc',
            'excerpt' => 'I am shakhawat hossain utsab. I am 22 years old',
            'thumbnail' => "",
            "title" => "this is title tag"
        ]);
        if($insert_data){
            echo "Data has been inserted to database";
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
