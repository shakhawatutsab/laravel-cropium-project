<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Post {
    public static function all(){
        return DB::table('posts')->paginate(5);
    }
}


?>
