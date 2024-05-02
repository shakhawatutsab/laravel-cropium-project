<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterEditsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function(Blueprint $table){
            $table -> string('content')->after('excerpt');
            $table -> string('email_address')->after('lastname');
            $table ->string('thumbnail')->after('content');
            $table ->string('title')->after('thumbnail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function(Blueprint $table){
            $table ->dropColumn('content');
            $table -> dropColumn('email_address');
            $table ->dropColumn('thumbnail');
            $table ->dropColumn('title');
        });
    }
};
