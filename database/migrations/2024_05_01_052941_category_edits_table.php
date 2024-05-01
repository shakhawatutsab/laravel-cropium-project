<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryEditsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('categories', function(Blueprint $table){
            $table->string("occupation")->after('id');
            $table->string("address")->after('occupation');
            $table->string('excerpt')->after('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function(Blueprint $table){
            $table->dropColumn("occupation")->after('id');
            $table->dropColumn("address")->after('occupation');
            $table->dropColumn('excerpt')->after('address');
        });
    }
};
